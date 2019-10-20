<?php
namespace Tereta\Import\Model\Core\Scope;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Registry;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObject;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Catalog\Api\ProductAttributeManagementInterface;

/**
 * Tereta\Import\Model\Core\Scope\AttributeSet
 *
 * Class AttributeSet
 * @package Tereta\Import\Model\Core\Scope
 */
class AttributeSet extends AbstractModel
{
    /**
     * @var array
     */
    protected $_attributeSetIds = [];

    /**
     * @var DataObject
     */
    protected $_configuration;

    /**
     * AttributeSet constructor.
     * @param Context $context
     * @param Registry $registry
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param ProductAttributeManagementInterface $productAttributeManagement
     * @param DataObject $configuration
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        ProductAttributeManagementInterface $productAttributeManagement,
        DataObject $configuration,
        array $data = []
    ) {
        $this->_configuration = $configuration;
        $this->_productAttributeManagement = $productAttributeManagement;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @param $attributeSetId
     * @param $attributeId
     * @return bool
     */
    public function isAllowedAttribute($attributeSetId, $attributeId)
    {
        $attributes = $this->getAttributeSetFields($attributeSetId);
        if (isset($attributes[$attributeId])) {
            return true;
        }
        return false;
    }

    /**
     * @param $attributeSetId
     * @return mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getAttributeSetFields($attributeSetId)
    {
        if (isset($this->_attributeSetIds[$attributeSetId])) {
            return $this->_attributeSetIds[$attributeSetId];
        }

        $this->_attributeSetIds[$attributeSetId] = $this->_productAttributeManagement->getAttributes($attributeSetId);
        return $this->_attributeSetIds[$attributeSetId];
    }
}