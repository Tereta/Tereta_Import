<?php
namespace Tereta\Import\Model\Import;

use Magento\Framework\DataObject;

/**
 * Tereta\Import\Model\Import\Filter
 *
 * Class Filter
 * @package Tereta\Import\Model\Import
 */
class Filter extends DataObject
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
     * @param string $adapterIdentifier
     * @return string
     */
    public function getLabel(string $adapterIdentifier): string
    {
        return $this->getData($adapterIdentifier);
    }
}
