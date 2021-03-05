<?php
namespace Tereta\Import\Model\Email\Filter;

/**
 * Tereta\Import\Model\Email\Filter\Listing
 *
 * Class Listing
 * @package Tereta\Import\Model\Email\Filter
 */
class Listing
{
    /**
     * @var boolean|null
     */
    protected $answered;

    /**
     * @var string|null
     */
    protected $from;

    /**
     * @var integer|null
     */
    protected $time;

    /**
     * @var string|null
     */
    protected $subject;

    /**
     * @var string|null
     */
    protected $body;

    /**
     * Listing constructor.
     * @param array $criteria
     */
    public function __construct(array $criteria = [])
    {
        if (isset($criteria['answered'])) {
            $this->setAnswered($criteria['answered']);
        }

        if (isset($criteria['from'])) {
            $this->setFrom($criteria['from']);
        }

        if (isset($criteria['subject'])) {
            $this->setSubject($criteria['subject']);
        }

        if (isset($criteria['body'])) {
            $this->setBody($criteria['body']);
        }

        if (isset($criteria['time'])) {
            $this->setTime($criteria['time']);
        }
    }

    /**
     * @param bool|null $value
     * @return $this
     */
    public function setAnswered(?bool $value = null): self
    {
        $this->answered = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAnswered(): ?bool
    {
        return $this->answered;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setFrom(?string $value = null): self
    {
        $this->from = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setBody(?string $value = null): self
    {
        $this->body = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $value
     * @return $this
     */
    public function setSubject(?string $value = null): self
    {
        $this->subject = $value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param int|null $value
     * @return $this
     */
    public function setTime(?int $value = null): self
    {
        $this->time = $value;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getTime(): ?int
    {
        return $this->time;
    }
}
