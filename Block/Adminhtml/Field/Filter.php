<?php
namespace Tereta\Import\Block\Adminhtml\Field;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Tereta\Import\Model\Import\Repository as ImportRepository;
use Tereta\Import\Model\Import\Filter as ImportFilter;

/**
 * Tereta\Import\Block\Adminhtml\Field\Filter
 *
 * Class Filter
 * @package Tereta\Import\Block\Adminhtml\Field
 */
class Filter extends Template
{
    protected $_template = 'field/filter.phtml';

    protected $importRepository;
    protected $importFilter;

    public function __construct(ImportFilter $importFilter, ImportRepository $importRepository, Context $context, array $data = [])
    {
        $this->importFilter = $importFilter;
        $this->importRepository = $importRepository;

        parent::__construct($context, $data);
    }

    public function toHtml()
    {
        $entityId = $this->getRequest()->getParam('entity_id');
        $importModel = $this->importRepository->getById($entityId);

        $list = $this->importFilter->getData();
        if (!$list) {
            return '';
        }

        $this->assign('label', $this->getData('label'));
        $this->assign('code', $this->getData('code'));
        $this->assign('list', $list);
        $this->assign('filter', $importModel->getFilter());
        $this->assign('importModel', $importModel);

        return parent::toHtml();
    }
}
