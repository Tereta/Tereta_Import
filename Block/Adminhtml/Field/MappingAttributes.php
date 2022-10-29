<?php
namespace Tereta\Import\Block\Adminhtml\Field;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Tereta\Import\Model\Import\Type as ValueType;

/**
 * Tereta\Import\Block\Adminhtml\Field\MappingAttributes
 *
 * Class MappingAttributes
 * @package Tereta\Import\Block\Adminhtml\Field
 */
class MappingAttributes extends Template
{
    protected $_template = 'field/mapping_attributes.phtml';
    protected $valueType;

    public function __construct(ValueType $valueType, Context $context, array $data = [])
    {
        $this->valueType = $valueType;

        parent::__construct($context, $data);
    }

    public function toHtml(): string
    {
        $this->assign('valueTypes', $this->valueType->getTypes());

        return parent::toHtml();
    }
}
