<?php
namespace Tereta\Import\Model\Import;

use Exception;

/**
 * Tereta\Import\Model\Import\Type
 *
 * Class Type
 * @package Tereta\Import\Model\Import
 */
class Type
{
    protected $type = [];

    public function __construct(
        array $type
    ) {
        $this->type = $type;
    }

    public function getTypes(): array
    {
        return $this->type;
    }

    public function getType(string $key)
    {
        if (!isset($this->type[$key])) {
            throw new Exception(__('The %1 value type was not found', $key));
        }

        return $this->type[$key];
    }

    public function getValue(string $key, $value)
    {
        return $this->getType($key)->getValue($value);
    }

    public function getLabel(string $key): string
    {
        return $this->getType($key)->getLabel();
    }
}
