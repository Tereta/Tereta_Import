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

namespace Tereta\Import\Model\Core\Scope;

use Magento\Catalog\Model\Indexer\Category\Product as IndexerCategoryProduct;
use Magento\Catalog\Model\Indexer\Product\Category as IndexerProductCategory;
use Magento\Catalog\Model\Indexer\Product\Price\Processor as IndexerProductPrice;
use Magento\CatalogRule\Model\Indexer\Product\ProductRuleProcessor as IndexerProductProductRule;
use Magento\Framework\DataObject;
use Tereta\Import\Model\ResourceModel\Core\Scope\Category as CategoryResource;

/**
 * Tereta\Import\Model\Core\Scope\Category
 *
 * Class Category
 * @package Tereta\Import\Model\Core\Sccollectope
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Category extends AbstractModel
{
    /**
     *
     */
    protected $mappingCategories = [];

    /**
     *
     */
    protected function _construct(): void
    {
        $this->_init(CategoryResource::class);
        $this->getResource()->setConfiguration($this->configuration)->setLogger($this->logger);

        $this->mappingCategories = [];

        $mapping = trim($this->configuration->getData('mapping_categories')) ? json_decode($this->configuration->getData('mapping_categories')) : [];

        foreach ($mapping as $value) {
            $this->mappingCategories[$value->key] = $value->value;
        }
    }

    /**
     * @return array
     */
    public function getSkipAttributes(): array
    {
        return [
            'product_category_ids'
        ];
    }

    /**
     * @param array $data
     */
    public function collect(array &$data): void
    {
        $data['product_category_ids'] = isset($data['product_category_ids']) ? trim($data['product_category_ids']) : null;

        if (!$data['product_category_ids']) {
            return;
        }

        $categoryIds = explode(",", $data['product_category_ids']);

        $data['product_category_ids'] = $this->getMappedCategories($categoryIds);

        $this->getResource()->collect($data);
    }

    /**
     * @param array $categoryIds
     * @return array
     */
    protected function getMappedCategories(array $categoryIds): array
    {
        foreach ($categoryIds as $key=>$categoryValue) {
            $categoryIds[$key] = $this->getMappedCategoryId($categoryValue);
        }

        return $categoryIds;
    }

    /**
     * @param $categoryValue
     * @return string
     */
    protected function getMappedCategoryId($categoryValue): string
    {
        if (isset($this->mappingCategories[$categoryValue])) {
            return $this->mappingCategories[$categoryValue];
        }

        return $categoryValue;
    }

    /**
     * @param DataObject $skuIds
     */
    public function fillEntityIds(DataObject $skuIds): void
    {
        $this->getResource()->fillEntityIds($skuIds);
    }

    /**
     *
     */
    public function save(): void
    {
        $this->getResource()->saveProductCategories();
    }

    /**
     * @return array
     */
    public function getIndexer(): array
    {
        return [
            IndexerProductCategory::INDEXER_ID,
            IndexerCategoryProduct::INDEXER_ID,
            IndexerProductPrice::INDEXER_ID,
            IndexerProductProductRule::INDEXER_ID
        ];
    }
}
