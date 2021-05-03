<?php
namespace Tereta\Import\Model\Import;

use Magento\Framework\DataObject;
use Tereta\Import\Model\Import\Processor\AbstractModel as ImportProcessor;

/**
 * Tereta\Import\Model\Import\Filter
 *
 * Class Filter
 * @package Tereta\Import\Model\Import
 */
class Filter extends DataObject
{
    /**
     * @var array
     */
    protected $_adapter = [];

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
     * @param string $adapterIdentifier
     * @return ImportProcessor
     * @throws Exception
     */
    public function getAdapter(string $adapterIdentifier): ImportProcessor
    {
        if (isset($this->_adapter[$adapterIdentifier])) {
            return $this->_adapter[$adapterIdentifier];
        }

        $adapterModel = $this->getData($adapterIdentifier);
        if (!$adapterModel) {
            throw new Exception('Import model for "' . $adapterIdentifier . '" was not found');
        }
        $this->_adapter[$adapterIdentifier] = $adapterModel['class'];

        return $this->_adapter[$adapterIdentifier];
    }
}
