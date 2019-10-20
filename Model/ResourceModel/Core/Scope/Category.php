<?php
namespace Tereta\Import\Model\ResourceModel\Core\Scope;

use Magento\Framework\Model\ResourceModel\Db\Context;
use Tereta\Import\Model\ResourceModel\Core\Scope\AbstractDb;

/**
 * Tereta\Import\Model\ResourceModel\Core\Scope\Category
 *
 * Class Category
 * @package Tereta\Import\Model\ResourceModel\Core\Scope
 */
class Category extends AbstractDb
{
    protected $collectedData = [];

    public function __construct(Context $context, $connectionName = null)
    {
        parent::__construct($context, $connectionName);
    }

    protected function _construct()
    {
        $this->_init('catalog_category_product', 'entity_id');
    }

    public function collect($data)
    {
        if (!isset($data['product_category_ids']) || !$data['product_category_ids']) {
            return;
        }
        $categoryIds = explode(";", $data['product_category_ids']);

        foreach($categoryIds as $categoryId){
            $categoryId = trim($categoryId);

            $collectedDataItem = [
                'category_id' => $categoryId,
                'product_id' => null,
                'position' => 0,
                'sku' => $data['sku']
            ];

            array_push($this->collectedData, $collectedDataItem);
        }
    }

    public function fillEntityIds($skuIds)
    {
        foreach($this->collectedData as $key=>$item) {
            $sku = $item['sku'];
            if (!$skuIds->getData($sku)) {
                unset($this->collectedData[$key]);
                continue;
            }

            $this->collectedData[$key]['product_id'] = $skuIds->getData($sku)['entity_id'];
            unset($this->collectedData[$key]['sku']);
        }
    }

    public function saveProductCategories()
    {
        $connection = $this->getConnection();
        $time = time();

        if ($this->collectedData) {
            $connection->insertOnDuplicate(
                'catalog_category_product',
                $this->collectedData,
                ['entity_id', 'category_id', 'product_id', 'position']
            );
        }

        $this->logger->debug('Uploaded and saved ' . count($this->collectedData) . ' records in the "catalog_category_product" table, time spent: ' . (time() - $time) . 'sec.');
    }
}