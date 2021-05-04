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
    /**
     * @var string
     */
    protected $_template = 'field/type.phtml';

    /**
     * @var ImportRepository
     */
    protected $importRepository;

    /**
     * @var ImportProcessor
     */
    protected $importProcessor;

    /**
     * Type constructor.
     * @param ImportProcessor $importProcessor
     * @param ImportRepository $importRepository
     * @param Context $context
     * @param array $data
     */
    public function __construct(ImportProcessor $importProcessor, ImportRepository $importRepository, Context $context, array $data = [])
    {
        $this->importProcessor = $importProcessor;
        $this->importRepository = $importRepository;

        parent::__construct($context, $data);
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function toHtml(): string
    {
        $entityId = $this->getRequest()->getParam('entity_id');

        $list = $this->importProcessor->getData();
        $this->assign('label', $this->getData('label'));
        $this->assign('code', $this->getData('code'));
        $this->assign('list', $list);

        if ($entityId) {
            $importModel = $this->importRepository->getById($entityId);
            $this->assign('type', $importModel->getType());
        } else {
            $this->assign('type', null);
        }

        return parent::toHtml();
    }
}
