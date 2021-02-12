<?php
namespace Tereta\Import\Block\Adminhtml\Field;

use Exception;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Tereta\Import\Helper\Data as HelperData;
use Tereta\Import\Model\Import\Repository as ImportRepository;

/**
 * Tereta\Import\Block\Adminhtml\Field\Log
 *
 * Class Skip
 * @package Tereta\Import\Block\Adminhtml\Field
 */
class Log extends Template
{
    protected $_template = 'field/log.phtml';

    protected $helperData;

    protected $importRepository;

    public function __construct(ImportRepository $importRepository, HelperData $helperData, Context $context, array $data = [])
    {
        $this->importRepository = $importRepository;
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }

    public function toHtml()
    {
        try {
            $entityId = $this->getRequest()->getParam('entity_id');
            $skipFileUrl = null;

            if (!$entityId) {
                throw new Exception(__('The entity was not found'));
            }
            $modelImport = $this->importRepository->getById($entityId);
            $this->helperData->getSkippedCsvReadFile($modelImport->getIdentifier());

            $skipFileUrl = $this->getUrl('advencedimport/edit/log', ['entity_id' => 9, 'type' => 'skip']) . 'skipped.csv';
        } catch (Exception $e) {
            return '';
        }

        $this->assign('skipFileUrl', $skipFileUrl);
        return parent::toHtml();
    }
}
