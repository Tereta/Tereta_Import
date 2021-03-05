<?php
namespace Tereta\Import\Model\Email\Part;

/**
 * Tereta\Import\Model\Email\Part\Attachment
 *
 * Class Attachment
 * @package Tereta\Import\Model\Email\Part
 */
class Attachment
{
    protected $name;
    protected $body;

    public function __construct($data = [])
    {
        if (isset($data['body'])) {
            $this->body = $data['body'];
        }

        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }
}
