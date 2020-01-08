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
 * ░  ░██╗░░░░░░░██╗░██╗░░░░░░░██╗░██╗░░░░░░░██╗░░░███╗░░░███╗░█████╗░░██████╗░███████╗███╗░░██╗████████╗░█████╗░░░░██████╗░██╗░░░██╗██████╗░  ░
 * ░  ░██║░░██╗░░██║░██║░░██╗░░██║░██║░░██╗░░██║░░░████╗░████║██╔══██╗██╔════╝░██╔════╝████╗░██║╚══██╔══╝██╔══██╗░░░██╔══██╗██║░░░██║██╔══██╗  ░
 * ░  ░╚██╗████╗██╔╝░╚██╗████╗██╔╝░╚██╗████╗██╔╝░░░██╔████╔██║███████║██║░░██╗░█████╗░░██╔██╗██║░░░██║░░░██║░░██║░░░██████╔╝██║░░░██║██████╦╝  ░
 * ░  ░░████╔═████║░░░████╔═████║░░░████╔═████║░░░░██║╚██╔╝██║██╔══██║██║░░╚██╗██╔══╝░░██║╚████║░░░██║░░░██║░░██║░░░██╔═══╝░██║░░░██║██╔══██╗  ░
 * ░  ░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░██╗██║░╚═╝░██║██║░░██║╚██████╔╝███████╗██║░╚███║░░░██║░░░╚█████╔╝██╗██║░░░░░╚██████╔╝██████╦╝  ░
 * ░  ░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░╚═╝╚═╝░░░░░╚═╝╚═╝░░╚═╝░╚═════╝░╚══════╝╚═╝░░╚══╝░░░╚═╝░░░░╚════╝░╚═╝╚═╝░░░░░░╚═════╝░╚═════╝░  ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 *
 * See COPYING.txt for license details.
 * Copyright © 2020 Tereta Alexander. All rights reserved.
 * Contacts:
 *     tereta@mail.ua
 *     www.tereta.dev
 *     www.magento.pub
 */

namespace Tereta\Import\Model\ResourceModel\Core\Scope;

use Magento\Framework\Model\ResourceModel\Db\Context;
use Tereta\Import\Model\ResourceModel\Core\Scope\AbstractDb;
use Magento\Framework\Indexer\IndexerRegistry;

/**
 * Tereta\Import\Model\ResourceModel\Core\Scope\Category
 *
 * Class Category
 * @package Tereta\Import\Model\ResourceModel\Core\Scope
 */
class Category extends AbstractDb
{
    /**
     *
     */
    protected $collectedData = [];

    /**
     *
     */
    protected $indexerRegistry;

    /**
     *
     */
    protected $reindexProductIds;

    /**
     *
     */
    public function __construct(IndexerRegistry $indexerRegistry, Context $context, $connectionName = null)
    {
        $this->indexerRegistry = $indexerRegistry;
        parent::__construct($context, $connectionName);
    }

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('catalog_category_product', 'entity_id');
    }

    /**
     *
     */
    public function collect($data)
    {
        if (!isset($data['product_category_ids']) || !$data['product_category_ids']) {
            return;
        }
        $categoryIds = [];

        if (trim($data['product_category_ids'])) {
            $categoryIds = json_decode($data['product_category_ids']);
        }

        if (!is_array($categoryIds)) {
            $categoryIds = [$categoryIds];
        }
        
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

    /**
     *
     */
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

    /**
     *
     */
    public function saveProductCategories()
    {
        $connection = $this->getConnection();
        $time = time();

        if ($this->collectedData) {
            $connection->insertOnDuplicate(
                $this->getTable('catalog_category_product'),
                $this->collectedData,
                ['entity_id', 'category_id', 'product_id', 'position']
            );
        }

        $this->logger->debug('Uploaded and saved ' . count($this->collectedData) . ' records in the "catalog_category_product" table, time spent: ' . (time() - $time) . 'sec.');

        $productIds = [];
        foreach($this->collectedData as $item){
            array_push($productIds, $item['product_id']);
        }

        $this->reindexProductIds = $productIds;
    }

    /**
     *
     */
    public function reindex()
    {
        $time = time();
        $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Product\Category::INDEXER_ID)->reindexList($this->reindexProductIds);
        $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Product\Category::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');

        $time = time();
        $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Category\Product::INDEXER_ID)->reindexList($this->reindexProductIds);
        $this->logger->debug('The ' . \Magento\Catalog\Model\Indexer\Category\Product::INDEXER_ID . ' index was processed in: ' . (time() - $time) . 'sec.');

        $time = time();
        $this->indexerRegistry->get(\Magento\CatalogRule\Model\Indexer\Rule\RuleProductProcessor::INDEXER_ID)->reindexList($this->reindexProductIds);
        $this->logger->debug('The ' . \Magento\CatalogRule\Model\Indexer\Rule\RuleProductProcessor::INDEXER_ID . ' index with ' . count($this->reindexProductIds) . ' products was processed in: ' . (time() - $time) . 'sec.');

        $time = time();
        $this->indexerRegistry->get(\Magento\CatalogRule\Model\Indexer\Product\ProductRuleProcessor::INDEXER_ID)->reindexList($this->reindexProductIds);
        $this->logger->debug('The ' . \Magento\CatalogRule\Model\Indexer\Product\ProductRuleProcessor::INDEXER_ID . ' index with ' . count($this->reindexProductIds) . ' products was processed in: ' . (time() - $time) . 'sec.');

    }
}