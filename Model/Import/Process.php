<?php

namespace Tereta\Import\Model\Import;

use Magento\Framework\DataObject;

class Process extends DataObject
{
    public function __construct(
        array $models = []
    ) {
        parent::__construct($models);
    }
    
    public function getAdapters()
    {
        return $this->getData();
    }
    
    public function getAdapter($adapterIdentifier)
    {
        if (isset($this->_adapter[$adapterIdentifier])) {
            return $this->_adapter[$adapterIdentifier];
        }
        
        $adapterModel = $this->getData($adapterIdentifier);
        if (!$adapterModel) {
            throw new \Exception('Process model for "' . $adapterIdentifier . '" was not found');
        }
        $this->_adapter[$adapterIdentifier] = $adapterModel['class'];
        
        return $this->_adapter[$adapterIdentifier];
    }
}