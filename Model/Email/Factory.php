<?php
namespace Tereta\Import\Model\Email;

use Magento\Framework\ObjectManagerInterface;
use Tereta\Billing\Model\Exception;
use Tereta\Import\Model\Email\Declaration as EmailInterface;

/**
 * Tereta\Import\Model\Email\Factory
 *
 * Class Factory
 * @package Tereta\Import\Model\Email
 */
class Factory
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var array
     */
    protected $instances;

    /**
     * Factory constructor.
     * @param ObjectManagerInterface $objectManager
     * @param array $instances
     */
    public function __construct(ObjectManagerInterface $objectManager, array $instances = [])
    {
        $this->instances = $instances;
        $this->objectManager = $objectManager;
    }

    /**
     * @param string $instance
     * @param array $data
     * @return Declaration
     * @throws Exception
     */
    public function create(string $instance = 'imap', array $configuration = []): EmailInterface
    {
        $instanceClass = null;
        if (isset($this->instances[$instance])) {
            $instanceClass = $this->instances[$instance];
        }

        if (!$instanceClass) {
            throw new Exception(__('The "%1" mail instance is not found.', $instance));
        }

        $this->objectManager->create($instance, $configuration);
    }
}
