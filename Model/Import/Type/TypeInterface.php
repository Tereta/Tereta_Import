<?php
namespace Tereta\Import\Model\Import\Type;

/**
 * Tereta\Import\Model\Import\Type\TypeInterface
 *
 * Interface TypeInterface
 * @package Tereta\Import\Model\Import\Type
 */
interface TypeInterface
{
    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @param $string
     * @return mixed
     */
    public function getValue($string);
}
