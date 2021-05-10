<?php
namespace Tereta\Import\Block\Adminhtml\Field;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Tereta\Import\Model\Import\Repository as ImportRepository;
use Tereta\Import\Model\Import\Filter as ImportFilter;
use Exception;

/**
 * Tereta\Import\Block\Adminhtml\Field\Extension
 *
 * Class Filter
 * @package Tereta\Import\Block\Adminhtml\Field
 */
class Extenstion extends Template
{
    /**
     * @var string
     */
    protected $_template = 'field/extension.phtml';

    /**
     * @var ImportRepository
     */
    protected $importRepository;

    /**
     * @var ImportFilter
     */
    protected $importFilter;

    /**
     * Filter constructor.
     * @param ImportFilter $importFilter
     * @param ImportRepository $importRepository
     * @param Context $context
     * @param array $data
     */
    public function __construct(ImportFilter $importFilter, ImportRepository $importRepository, Context $context, array $data = [])
    {
        $this->importFilter = $importFilter;
        $this->importRepository = $importRepository;

        parent::__construct($context, $data);
    }

    /**
     * @return string
     * @throws Exception
     */
    public function toHtml(): string
    {
        $entityId = $this->getRequest()->getParam('entity_id');

        $list = $this->importFilter->getData();
        if (!$list) {
            return '';
        }

        $this->assign('label', $this->getData('label'));
        $this->assign('code', $this->getData('code'));
        $this->assign('list', $list);

        if ($entityId) {
            $importModel = $this->importRepository->getById($entityId);
            $this->assign('extension', $importModel->getExtension());
        } else {
            $this->assign('extension', []);
        }

        return parent::toHtml();
    }
}
