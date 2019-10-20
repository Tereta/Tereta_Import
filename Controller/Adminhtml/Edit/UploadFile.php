<?php
namespace Tereta\Import\Controller\Adminhtml\Edit;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Filesystem;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Magento\Framework\Controller\ResultFactory;

class UploadFile extends Action
{
    protected $uploaderFactory;
    protected $varDirectory;

    public function __construct(
        Context $context,
        Filesystem $filesystem,
        UploaderFactory $uploaderFactory
    ) {
        $this->varDirectory = $filesystem->getDirectoryWrite(DirectoryList::VAR_DIR);
        $this->uploaderFactory = $uploaderFactory;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            $data = $this->getRequest()->getPostValue();
            $uploader = $this->uploaderFactory->create(['fileId' => 'upload_file']);
            $uploader->setAllowRenameFiles(true);
            $uploader->setAllowedExtensions(['csv', 'xls']);
            $path = $this->varDirectory->getAbsolutePath('import/upload_file');

            $saveFileName = 'temp_' . time() . '_' . uniqid() . '.' . $uploader->getFileExtension();
            $result = $uploader->save($path, $saveFileName);
            unset($result['path']);
        } catch (\Exception $e) {
            $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
        }
        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
    }
}