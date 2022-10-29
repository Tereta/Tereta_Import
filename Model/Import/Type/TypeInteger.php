<?php
namespace Tereta\Import\Model\Import\Type;

/**
 * Tereta\Import\Model\Import\Type\IntegerType
 *
 * Class IntegerType
 * @package Tereta\Import\Model\Import\Type
 */
class TypeInteger implements TypeInterface
{
    public function getLabel(): string
    {
        return __('Integer');
    }

    public function getValue($string)
    {
        return (integer) $string;
    }
}
