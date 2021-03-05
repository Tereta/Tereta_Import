<?php
namespace Tereta\Import\Model\Email;

use Exception;
use Magento\Framework\DataObject;
use Magento\Framework\DataObjectFactory;
use Tereta\Import\Model\Email\Declaration as EmailInterface;
use Tereta\Import\Model\Email\Filter\Listing as FilterListing;
use Tereta\Import\Model\Email\Filter\ListingFactory as FilterListingFactory;
use Tereta\Import\Model\Email\Part\AttachmentFactory;

/**
 * Tereta\Import\Model\Email\Imap
 *
 * Class Imap
 * @package Tereta\Import\Model\Email
 */
class Imap implements EmailInterface
{
    /**
     * @var
     */
    protected $config;

    /**
     * @var DataObjectFactory
     */
    protected $dataObjectFactory;

    /**
     * @var FilterListingFactory
     */
    protected $filterListingFactory;

    /**
     * @var
     */
    protected $resource;

    /**
     * @var AttachmentFactory
     */
    protected $attachmentFactory;

    /**
     * Imap constructor.
     * @param AttachmentFactory $attachmentFactory
     * @param DataObjectFactory $dataObjectFactory
     * @param FilterListingFactory $filterListingFactory
     * @param array $configuration
     */
    public function __construct(
        AttachmentFactory $attachmentFactory,
        DataObjectFactory $dataObjectFactory,
        FilterListingFactory $filterListingFactory,
        array $configuration = []
    ) {
        $this->attachmentFactory = $attachmentFactory;
        $this->filterListingFactory = $filterListingFactory;
        $this->dataObjectFactory = $dataObjectFactory;

        if ($configuration) {
            $this->getConfiguration()->addData($configuration);
        }
    }

    /**
     * @param DataObject $configObject
     */
    public function setConfiguraton(DataObject $configObject): void
    {
        $this->config = $configObject;
    }

    /**
     * @return DataObject
     */
    public function getConfiguration(): DataObject
    {
        if ($this->config) {
            return $this->config;
        }

        $this->setConfiguraton($this->dataObjectFactory->create(['data'=> [
            'server'   => null,
            'port'     => null,
            'ssl'      => false,
            'username' => null,
            'password' => null,
            'box'      => null
        ]]));

        return $this->config;
    }

    /**
     * @return resource
     * @throws Exception
     */
    public function getConnection()
    {
        if ($this->resource) {
            return $this->resource;
        }

        if (!extension_loaded('imap')) {
            $version = explode('.', PHP_VERSION);
            throw new Exception(__('The imap module is not installed. Perform the "sudo apt-get install php%1.%2-imap" in the terminal to install it.', $version[0], $version[1]));
        }

        $config = $this->getConfiguration();

        $server = $config->getData('server');
        $port = $config->getData('port');
        $ssl = $config->getData('ssl') ? 'ssl' : 'nossl';
        $box = $config->getData('box');
        $mailBox = "{$server}:{$port}/imap/{$ssl}";
        $mailBox = '{' . $mailBox . '}' . $box;

        if (!$server || !$port || !$box) {
            throw new Exception(__('IMAP server, port and box should be configured'));
        }

        if (!$config->getData('username')) {
            throw new Exception(__('IMAP user name is not present'));
        }

        if (!$config->getData('password')) {
            throw new Exception(__('IMAP password is not present'));
        }

        $this->resource = @imap_open($mailBox, $config->getData('username'), $config->getData('password'), OP_READONLY);
        if (!$this->resource && $lastError = imap_last_error()) {
            throw new Exception($lastError);
        } elseif (!$this->resource) {
            throw new Exception(__('IMAP connection can not be established.'));
        }

        return $this->resource;
    }

    /**
     * @param FilterListing|null $filterListing
     * @param bool $orderDesc
     * @return array
     * @throws Exception
     */
    public function getList(?FilterListing $filterListing = null, bool $orderDesc = false): array
    {
        $connection = $this->getConnection();

        $list = [];
        $criteria = [];
        if ($filterListing) {
            $criteria = $this->buildCriteria($filterListing);
        }

        $messages = imap_search($connection, implode(" ", $criteria));
        if (!$messages) {
            $messages = [];
        }
        if ($orderDesc) {
            $messages = array_reverse($messages);
        }
        foreach ($messages as $number) {
            $overview = $this->getMessageOverview($number);
            array_push($list, $overview);
        }

        return $list;
    }

    public function getAttachments(int $number)
    {
        $connection = $this->getConnection();
        $attachments = [];

        $structure = imap_fetchstructure($connection, $number);
        foreach ($structure->parts as $partNumber=>$part) {
            $part = (array) $part;
            if (!isset($part['disposition']) || $part['disposition'] != 'ATTACHMENT') {
                continue;
            }

            $data = [];

            if (isset($part['parameters'])) {
                foreach ($part['parameters'] as $param) {
                    $data[strtolower($param->attribute)] = $param->value;
                }
            }

            $body = imap_fetchbody($connection, $number, $partNumber + 1);
            $body = base64_decode($body);

            $data['body'] = $body;

            array_push($attachments, $this->attachmentFactory->create(['data' => $data]));
        }

        return $attachments;
    }

    protected function buildCriteria(?FilterListing $filterListing): array
    {
        $criteria = [];
        if ($filterListing->getAnswered() == true) {
            array_push($criteria, 'ANSWERED');
        }
        if ($filterListing->getAnswered() === false) {
            array_push($criteria, 'UNANSWERED');
        }
        if ($filterListing->getTime()) {
            array_push($criteria, "BEFORE {$this->valueQuote($filterListing->getTime())}");
        }
        if ($filterListing->getFrom()) {
            array_push($criteria, "FROM {$this->valueQuote($filterListing->getFrom())}");
        }
        if ($filterListing->getSubject()) {
            array_push($criteria, "SUBJECT {$this->valueQuote($filterListing->getSubject())}");
        }
        if ($filterListing->getBody()) {
            array_push($criteria, "BODY {$this->valueQuote($filterListing->getBody())}");
        }
        return $criteria;
    }

    protected function valueQuote(string $value): string
    {
        return '"' . str_replace('"', '&quote;', $value) . '"';
    }

    public function getMessageBody(int $number): DataObject
    {
        $connection = $this->getConnection();

        $structure = imap_fetchstructure($connection, $number);
        $e=0;
    }

    public function getMessageOverview(int $number): DataObject
    {
        $connection = $this->getConnection();
        list($overview) = imap_fetch_overview($connection, $number, 0);
        $result = $this->dataObjectFactory->create();

        $result->setData('number', $number);

        if (isset($overview->subject)) {
            $result->setData('subject', iconv_mime_decode($overview->subject));
        }

        if (isset($overview->from)) {
            $result->setData('from', iconv_mime_decode($overview->from));
        }

        if (isset($overview->to)) {
            $result->setData('to', iconv_mime_decode($overview->to));
        }

        if (isset($overview->message_id)) {
            $result->setData('message_id', $overview->message_id);
        }

        if (isset($overview->uid)) {
            $result->setData('uid', $overview->uid);
        }

        if (isset($overview->udate)) {
            $result->setData('time', $overview->udate);
        }

        if ($result->getTime()) {
            $result->setData('date_time', date('m.d.y G:i:s', $result->getTime()));
        }

        return $result;
    }

    /**
     * @return FilterListing
     */
    public function createFilterListing(): FilterListing
    {
        return $this->filterListingFactory->create();
    }
}
