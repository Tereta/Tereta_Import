<?php
/**
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░     ████████╗███████╗██████╗░███████╗████████╗░█████╗░    ░█████╗░██╗░░░░░███████╗██╗░░██╗░█████╗░███╗░░██╗██████╗░███████╗██████╗░       ░
 * ░     ╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗    ██╔══██╗██║░░░░░██╔════╝╚██╗██╔╝██╔══██╗████╗░██║██╔══██╗██╔════╝██╔══██╗       ░
 * ░     ░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║    ███████║██║░░░░░█████╗░░░╚███╔╝░███████║██╔██╗██║██║░░██║█████╗░░██████╔╝       ░
 * ░     ░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║    ██╔══██║██║░░░░░██╔══╝░░░██╔██╗░██╔══██║██║╚████║██║░░██║██╔══╝░░██╔══██╗       ░
 * ░     ░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║    ██║░░██║███████╗███████╗██╔╝╚██╗██║░░██║██║░╚███║██████╔╝███████╗██║░░██║       ░
 * ░     ░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝    ╚═╝░░╚═╝╚══════╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝╚═════╝░╚══════╝╚═╝░░╚═╝       ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░      █████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗       ░
 * ░      ╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝       ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░        ░██╗░░░░░░░██╗░██╗░░░░░░░██╗░██╗░░░░░░░██╗░░░████████╗███████╗██████╗░███████╗████████╗░█████╗░░░░██████╗░███████╗██╗░░░██╗        ░
 * ░        ░██║░░██╗░░██║░██║░░██╗░░██║░██║░░██╗░░██║░░░╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗░░░██╔══██╗██╔════╝██║░░░██║        ░
 * ░        ░╚██╗████╗██╔╝░╚██╗████╗██╔╝░╚██╗████╗██╔╝░░░░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║░░░██║░░██║█████╗░░╚██╗░██╔╝        ░
 * ░        ░░████╔═████║░░░████╔═████║░░░████╔═████║░░░░░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║░░░██║░░██║██╔══╝░░░╚████╔╝░        ░
 * ░        ░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░██╗░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║██╗██████╔╝███████╗░░╚██╔╝░░        ░
 * ░        ░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░╚═╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝╚═╝╚═════╝░╚══════╝░░░╚═╝░░░        ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 *
 * See COPYING.txt for license details.
 * Copyright © 2020 Tereta Alexander. All rights reserved.
 * Contacts:
 *     tereta@mail.ua
 *     www.tereta.dev
 */

namespace Tereta\Import\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Store\Model\ScopeInterface;
use Monolog\DateTimeImmutable;
use Monolog\Handler\StreamHandler;
use Symfony\Component\Console\Output\ConsoleOutput;
use Magento\Framework\Exception\FileSystemException;

/**
 * Tereta\Import\Model\Logger
 *
 * Class Logger
 * @package Tereta\Import\Model
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Logger extends \Monolog\Logger
{
    const XML_PATH_CONFIGURATION_DEBUG = 'tereta_import/configuration/debug';

    const LOGGER_DIR = "log/import";

    /**
     * @var null
     */
    protected $_commandOutput = null;

    /**
     * @var ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @var bool
     */
    protected $htmlOutput = false;

    /**
     * @var DirectoryList
     */
    protected $directoryList;

    /**
     * Logger constructor.
     * @param DirectoryList $directoryList
     * @param ScopeConfigInterface $scopeConfig
     * @param string $name
     * @param array $handlers
     * @param array $processors
     */
    public function __construct(
        DirectoryList $directoryList,
        ScopeConfigInterface $scopeConfig,
        $name,
        array $handlers = [],
        array $processors = []
    ) {
        $this->directoryList = $directoryList;
        $this->_scopeConfig = $scopeConfig;

        parent::__construct($name, $handlers, $processors);
    }

    /**
     * @param ConsoleOutput $output
     * @return $this
     */
    public function setCommandOutput(ConsoleOutput $output): self
    {
        $this->_commandOutput = $output;
        return $this;
    }

    /**
     * @param bool $boolean
     * @return $this
     */
    public function setHtmlOutput(bool $boolean): self
    {
        $this->htmlOutput = $boolean;
        return $this;
    }

    /**
     * @param int $level
     * @param string $message
     * @param array $context
     * @param DateTimeImmutable|null $datetime
     * @return bool
     * @throws FileSystemException
     */
    public function addRecord(int $level, string $message, array $context = [], DateTimeImmutable $datetime = null): bool
    {
        if (!$this->handlers) {
            $logPath = $this->directoryList->getPath(DirectoryList::VAR_DIR) . '/' . static::LOGGER_DIR . '/logging.log';
            $this->pushHandler(
                new StreamHandler($logPath, static::DEBUG)
            );
        }

        $blockCommandOutput = isset($context['blockCommandOutput']) && $context['blockCommandOutput'] == true;
        $allLog = isset($context['allLog']) && $context['allLog'] == true;

        if ($this->_commandOutput && !$blockCommandOutput) {
            $commandMessage = $message;

            switch ($level) {
                case (static::INFO):
                    $commandMessage = '<info>' . $commandMessage . '</info>';
                    break;
                case (static::WARNING):
                case (static::ERROR):
                    $commandMessage = '<error>' . $commandMessage . '</error>';
                    break;
                case (static::DEBUG):
                    $commandMessage = '<info>DEBUG: ' . $commandMessage . '</info>';
                    break;
                default:
                    $commandMessage = $commandMessage;
                    break;
            }

            $showMessage = true;
            if ($level == static::DEBUG && !$this->_commandOutput->isDebug()) {
                $showMessage = false;
            }

            if ($showMessage) {
                $this->_commandOutput->writeln($commandMessage);
            }
        } elseif ($this->htmlOutput) {
            $commandMessage = $message;

            switch ($level) {
                case (static::INFO):
                    $commandMessage = '<div class="info">' . $commandMessage . '</div>';
                    break;
                case (static::WARNING):
                case (static::ERROR):
                    $commandMessage = '<div class="error">' . $commandMessage . '</div>';
                    break;
                case (static::DEBUG):
                    $commandMessage = '<div class="info">DEBUG: ' . $commandMessage . '</div>';
                    break;
                default:
                    $commandMessage = '<div>' . $commandMessage . '</div>';
                    break;
            }

            echo $commandMessage;
            return false;
        }

        if (!$allLog && $level <= static::DEBUG && !$this->_scopeConfig->isSetFlag(self::XML_PATH_CONFIGURATION_DEBUG, ScopeInterface::SCOPE_STORE)) {
            return false;
        }

        return parent::addRecord($level, $message, $context, $datetime);
    }
}
