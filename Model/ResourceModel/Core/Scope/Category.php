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

namespace Tereta\Import\Model\ResourceModel\Core\Scope;

use Magento\Framework\Indexer\IndexerRegistry;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * Tereta\Import\Model\ResourceModel\Core\Scope\Category
 *
 * Class Category
 * @package Tereta\Import\Model\ResourceModel\Core\Scope
 * @author Tereta Alexander <tereta@mail.ua>
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
     * @param $data
     */
    public function collect($data)
    {
        $categoryIds = $data['product_category_ids'];

        foreach ($categoryIds as $categoryId) {
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
        foreach ($this->collectedData as $key=>$item) {
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

        $this->logger->debug(
            __('Uploaded and saved %1 records in the "catalog_category_product" table (%2sec).', count($this->collectedData), (time() - $time))
        );

        $productIds = [];
        foreach ($this->collectedData as $item) {
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
        $this->logger->debug(
            __('The %1 index was processed (%2sec).', \Magento\Catalog\Model\Indexer\Product\Category::INDEXER_ID, (time() - $time))
        );

        $time = time();
        $this->indexerRegistry->get(\Magento\Catalog\Model\Indexer\Category\Product::INDEXER_ID)->reindexList($this->reindexProductIds);
        $this->logger->debug(
            __('The %1 index was processed (%2sec).', \Magento\Catalog\Model\Indexer\Category\Product::INDEXER_ID, (time() - $time))
        );

        $time = time();
        $this->indexerRegistry->get(\Magento\CatalogRule\Model\Indexer\Rule\RuleProductProcessor::INDEXER_ID)->reindexList($this->reindexProductIds);
        $this->logger->debug(
            __('The %1 index was processed (%2sec).', \Magento\CatalogRule\Model\Indexer\Rule\RuleProductProcessor::INDEXER_ID, (time() - $time))
        );

        $time = time();
        $this->indexerRegistry->get(\Magento\CatalogRule\Model\Indexer\Product\ProductRuleProcessor::INDEXER_ID)->reindexList($this->reindexProductIds);
        $this->logger->debug(
            __('The %1 index was processed (%2sec).', \Magento\CatalogRule\Model\Indexer\Product\ProductRuleProcessor::INDEXER_ID, (time() - $time))
        );
    }
}
