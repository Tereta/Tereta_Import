<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Tereta\Import\Model\Config\Source;

use Tereta\Import\Model\Import as ImportModel;

/**
 * @api
 * @since 100.0.2
 */
class Types implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var ImportModel
     */
    protected $_importModel;

    /**
     * Types constructor.
     * @param ImportModel $importModel
     */
    public function __construct(ImportModel $importModel) {
        $this->_importModel = $importModel;
    }
    
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $return = [
            ['value' => '', 'label' => __('Select Type')]
        ];
        
        $adapters = $this->_importModel->getExtractAdapters();
        
        foreach($adapters as $key=>$item){
            array_push($return, ['value' => $key, 'label' => __($item['label'])]);
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

