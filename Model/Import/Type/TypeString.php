<?php
namespace Tereta\Import\Model\Import\Type;

use Tereta\Import\Model\Import\Type\TypeInterface;

/**
 * Tereta\Import\Model\Import\Type\StringType
 *
 * Class StringType
 * @package Tereta\Import\Model\Import\Type
 */
class TypeString implements TypeInterface
{
    public function getLabel(): string
    {
        return __('String');
    }

    public function getValue($string)
    {
        return (string) $string;
    }
}
