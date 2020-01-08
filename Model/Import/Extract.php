<?php
namespace Tereta\Import\Model\Import;

use Magento\Framework\DataObject;

class Extract extends DataObject
{
    /**
     * Extract constructor.
     * @param array $models
     */
    public function __construct(
        array $models = []
    ) {
        parent::__construct($models);
    }

    /**
     * @return mixed
     */
    public function getAdapters()
    {
        return $this->getData();
    }

    /**
     * @param $adapterIdentifier
     * @return mixed
     * @throws \Exception
     */
    public function getAdapter($adapterIdentifier)
    {
        if (isset($this->_adapter[$adapterIdentifier])) {
            return $this->_adapter[$adapterIdentifier];
        }
        
        $adapterModel = $this->getData($adapterIdentifier);
        if (!$adapterModel) {
            throw new \Exception('Import model for "' . $adapterIdentifier . '" was not found');
        }
        $this->_adapter[$adapterIdentifier] = $adapterModel['class'];
        
        return $this->_adapter[$adapterIdentifier];
    }
}