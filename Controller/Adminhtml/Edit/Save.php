<?php
namespace Tereta\Import\Controller\Adminhtml\Edit;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Tereta\Import\Model\ImportFactory as ModelImportFactory;

class Save extends Action
{
    protected $modelImportFactory;
    
    public function __construct(
        ModelImportFactory $modelImportFactory,
        Context $context
    ) {
        $this->modelImportFactory = $modelImportFactory;
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Tereta_Import::import');
    }
    
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();

        $modelImport = $this->modelImportFactory->create();

        if ($this->getRequest()->getPost('entity_id')) {
            $modelImport->load($this->getRequest()->getPost('entity_id'));
        }
        else {
            unset($data['entity_id']);
        }
        
        unset($data['form_key']);
        unset($data['additional_data']);

        try {
            if (isset($data['entity_id'])) {
                $modelImport->load($data['entity_id']);
            }

            if (isset($data['product_assign_categories'])) {
                $data['product_assign_categories'] = json_encode($data['product_assign_categories']);
            }

            $modelImport->setData($data);
            $modelImport->save();
            $modelImport->getExtractAdapter()->afterSave($modelImport);

            $this->messageManager->addSuccessMessage(__('You saved the configuration.'));

            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('advencedimport/edit/index', ['entity_id' => $modelImport->getEntityId()]);
        } catch (Exception $ex) {
            $this->messageManager->addErrorMessage($e->getMessage());

            return $resultRedirect->setPath('advencedimport/edit/index', ['entity_id' => $this->getRequest()->getPost('entity_id')]);
        }
    }
}