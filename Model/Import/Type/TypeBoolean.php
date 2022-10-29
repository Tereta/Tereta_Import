<?php
namespace Tereta\Import\Model\Import\Type;

/**
 * Tereta\Import\Model\Import\Type\BooleanType
 *
 * Class BooleanType
 * @package Tereta\Import\Model\Import\Type
 */
class TypeBoolean implements TypeInterface
{
    public function getLabel(): string
    {
        return __('Boolean');
    }

    public function getValue($string)
    {
        return (boolean) $string;
    }
}
