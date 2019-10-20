<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Tereta\Import\Block\Adminhtml\Block\Edit;

use Magento\Backend\Block\Widget\Context;
use Tereta\Import\Model\ImportFactory as ModelImportFactory;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class GenericButton
 */
class GenericButton
{
    protected $context;

    protected $_modelImport;

    public function __construct(
        Context $context,
        ModelImportFactory $modelImportFactory
    ) {
        $this->context = $context;
        $this->_modelImport = $modelImportFactory->create();
    }

    public function getEntityId()
    {
        try {
            return $this->_modelImport->load(
                $this->context->getRequest()->getParam('entity_id')
            )->getId();
        } catch (NoSuchEntityException $e) {
        }
        return null;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
