<?php

namespace Tereta\Import\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Tereta\Import\Model\Config\Source\Stores
 *
 * Class Stores
 * @package Tereta\SeoFilters\Model\Config\Source
 */
class Stores implements ArrayInterface
{
    protected $_storeManager;

    public function __construct(StoreManagerInterface $storeManager) {
        $this->_storeManager = $storeManager;
    }

    public function toOptionArray()
    {
        $return = [];

        array_push($return, ['value' => 0, 'label' => __('All Store Views')]);
        foreach($this->_storeManager->getStores() as $storeModel){
            array_push($return, ['value' => $storeModel->getStoreId(), 'label' => $storeModel->getName()]);
        }

        return $return;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [];
    }

}