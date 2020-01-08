<?php

namespace Tereta\Import\Model\Config\Source;

use Magento\Catalog\Model\Product\Visibility as VisibilitySource;

/**
 * Tereta\Import\Model\Config\Source\Visibility
 *
 * Class Visibility
 * @package Tereta\Import\Model\Config\Source
 */
class Visibility extends VisibilitySource
{
    /**
     * @return array
     */
    public static function getOptionArray()
    {
        $array = parent::getOptionArray();
        $array = array_merge([0 => __('Not In Use')], $array);

        return $array;
    }

    /**
     * @return array
     */
    public static function getAllOptions()
    {
        $res = [];
        foreach (static::getOptionArray() as $index => $value) {
            $res[] = ['value' => $index, 'label' => $value];
        }
        return $res;
    }
}