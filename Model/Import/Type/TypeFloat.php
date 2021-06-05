<?php
namespace Tereta\Import\Model\Import\Type;

/**
 * Tereta\Import\Model\Import\Type\FloatInteger
 *
 * Class FloatInteger
 * @package Tereta\Import\Model\Import\Type
 */
class TypeFloat implements TypeInterface
{
    public function getLabel(): string
    {
        return __('Float');
    }

    public function getValue($string)
    {
        return (float) $string;
    }
}
