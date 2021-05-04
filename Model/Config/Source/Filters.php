<?php
namespace Tereta\Import\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Tereta\Import\Model\Import as ImportModel;
use Tereta\Import\Model\Import\Filter as ImportFilterModel;

/**
 * Tereta\Import\Model\Config\Source\Filters
 *
 * Class Filters
 * @package Tereta\Import\Model\Config\Source
 */
class Filters implements OptionSourceInterface
{
    /**
     * @var ImportFilterModel
     */
    protected $importFilterModel;

    /**
     * Filters constructor.
     * @param ImportFilterModel $importFilterModel
     */
    public function __construct(
        ImportFilterModel $importFilterModel
    ) {
        $this->importFilterModel = $importFilterModel;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        $return = [
            ['value' => 'null', 'label' => __('Not selected')]
        ];

        $adapters = $this->importFilterModel->getAdapters();

        foreach ($adapters as $key=>$label) {
            array_push($return, ['value' => $key, 'label' => $label]);
        }

        return $return;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }
}

