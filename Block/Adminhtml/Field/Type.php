<?php
namespace Tereta\Import\Block\Adminhtml\Field;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Tereta\Import\Model\Import\Repository as ImportRepository;
use Tereta\Import\Model\Import\Processor as ImportProcessor;

/**
 * Tereta\Import\Block\Adminhtml\Field\Type
 *
 * Class Type
 * @package Tereta\Import\Block\Adminhtml\Field
 */
class Type extends Template
{
    protected $_template = 'field/type.phtml';

    protected $importRepository;
    protected $importProcessor;

    public function __construct(ImportProcessor $importProcessor, ImportRepository $importRepository, Context $context, array $data = [])
    {
        $this->importProcessor = $importProcessor;
        $this->importRepository = $importRepository;

        parent::__construct($context, $data);
    }

    public function toHtml()
    {
        $entityId = $this->getRequest()->getParam('entity_id');
        $importModel = $this->importRepository->getById($entityId);

        $list = $this->importProcessor->getData();
        $this->assign('label', $this->getData('label'));
        $this->assign('code', $this->getData('code'));
        $this->assign('list', $list);
        $this->assign('type', $importModel->getType());
        $this->assign('importModel', $importModel);

        return parent::toHtml();
    }
}
