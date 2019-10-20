<?php

namespace Tereta\Import\Model\Ui\Form;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider as DataProviderExtend;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Api\FilterBuilder;
use Tereta\Import\Model\ResourceModel\Import\CollectionFactory as ImportCollectionFactory;
use Tereta\Import\Model\Import as ImportModel;

/**
 * Tereta\Import\Model\UI\Form\DataProvider
 */
class DataProvider extends DataProviderExtend
{
    protected $_importCollection;

    protected $_loadedData = [];
    
    protected $_importModel;
    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        ImportCollectionFactory $importCollectionFactory,
        ReportingInterface $reporting,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        RequestInterface $request,
        FilterBuilder $filterBuilder,
        ImportModel $importModel,
        array $meta = array(),
        array $data = array()
    ) {
        $this->_importCollection = $importCollectionFactory->create();
        $this->_importModel = $importModel;
        
        parent::__construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            $reporting,
            $searchCriteriaBuilder,
            $request,
            $filterBuilder,
            $meta,
            $data
        );
    }
    
    public function getData() {
        $items = $this->_importCollection->getItems();

        if ($this->_loadedData) {
            return $this->_loadedData;
        }
        
        foreach ($items as $item) {
            $data = $item->getData();
            if ($data['type']) {
                $this->_importModel->getExtractAdapter($data['type'])->decodeData($data);
            }
            $this->_loadedData[$item->getId()] = $data;
        }
        
        return $this->_loadedData;
    }
}