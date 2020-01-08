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
 * @package Tereta\Import\Block\Adminhtml\Block\Edit
 */
class GenericButton
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var \Tereta\Import\Model\Import
     */
    protected $_modelImport;

    /**
     * GenericButton constructor.
     * @param Context $context
     * @param ModelImportFactory $modelImportFactory
     */
    public function __construct(
        Context $context,
        ModelImportFactory $modelImportFactory
    ) {
        $this->context = $context;
        $this->_modelImport = $modelImportFactory->create();
    }

    /**
     * @return mixed|null
     */
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
