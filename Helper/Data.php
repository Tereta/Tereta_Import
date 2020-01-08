<?php
namespace Tereta\Import\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Filesystem\DirectoryList;

/**
 * Tereta\Import\Helper\Data
 *
 * Class Data
 * @package Tereta\Import\Helper
 */
class Data extends AbstractHelper
{
    const DIR_PATH = 'catalog/product';

    /**
     * @var DirectoryList
     */
    protected $directoryList;

    /**
     * Data constructor.
     * @param DirectoryList $directoryList
     * @param Context $context
     */
    public function __construct(
        DirectoryList $directoryList,
        Context $context
    ) {
        $this->directoryList = $directoryList;
        parent::__construct($context);
    }

    /**
     * @param $url
     * @return array
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function getLocalFilePath($url)
    {
        $dirPath = $this->directoryList->getPath('media') . '/' . static::DIR_PATH;
        $pathInfo = pathinfo($url);

        if (substr($url, 0, strlen("http://")) != "http://" && substr($url, 0, strlen("https://")) != "https://") {
            throw new \Exception("Wrong URL is present: \"" . $url ."\"");
        }

        if (!isset($pathInfo['extension'])) {
            throw new \Exception("Can't find extension of image in the \"" . $url ."\" URLs");
        }

        $extension = $pathInfo['extension'];

        $newFileName = sha1($url);
        $fLatter = substr($newFileName, 0, 1);
        $sLatter = substr($newFileName, 1, 1);
        $filePath = '/' . $fLatter . '/' . $sLatter . '/' . $newFileName . '_import.' . $extension;
        $fullPath = $dirPath . $filePath;
        return [$fullPath, $filePath];
    }
}

