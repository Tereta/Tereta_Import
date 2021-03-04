<?php
namespace Tereta\Import\Model\Email;

use Exception;
use Magento\Framework\DataObject;
use Magento\Framework\DataObjectFactory;
use Tereta\Import\Model\Email\Declaration as EmailInterface;
use Tereta\Import\Model\Email\Filter\Listing as FilterListing;
use Tereta\Import\Model\Email\Filter\ListingFactory as FilterListingFactory;

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
     * Imap constructor.
     * @param DataObjectFactory $dataObjectFactory
     * @param FilterListingFactory $filterListingFactory
     * @param array $configuration
     */
    public function __construct(
        DataObjectFactory $dataObjectFactory,
        FilterListingFactory $filterListingFactory,
        array $configuration = []
    ) {
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
     *
     */
    public function getConnection(): ?string
    {
        if ($this->resource) {
            return $this->resource;
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

        $this->resource = imap_open($mailBox, $config->getData('username'), $config->getData('password'), OP_READONLY);
        if (!$this->resource && $lastError = imap_last_error()) {
            throw Exception($lastError);
        } elseif (!$this->resource) {
            throw Exception(__('IMAP connection can not be established.'));
        }
    }

    /**
     * @param FilterListing|null $filterListing
     * @return array
     */
    public function getList(?FilterListing $filterListing = null): array
    {
        $connection = $this->getConfiguration();

        exit('-=-');
    }

    /**
     * @return FilterListing
     */
    public function createFilterListing(): FilterListing
    {
        return $this->filterListingFactory->create();
    }
}
