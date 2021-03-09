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

use Exception;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\Indexer\Category\Product as IndexerCategoryProduct;
use Magento\Catalog\Model\Indexer\Product\Category as IndexerProductCategory;
use Magento\Catalog\Model\Indexer\Product\Price\Processor as IndexerProductPrice;
use Magento\CatalogRule\Model\Indexer\Product\ProductRuleProcessor as IndexerProductProductRule;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Tereta\Import\Model\Logger;
use Tereta\Import\Model\ResourceModel\Core\Scope\Category as CategoryResource;
use Tereta\Import\Model\ResourceModel\Core\Scope\CategoryFactory as CategoryResourceFactory;

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
     * @var CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * @var array
     */
    protected $isCategoryExists = [];

    /**
     * Category constructor.
     * @param Context $context
     * @param Registry $registry
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param DataObject $configuration
     * @param CategoryResourceFactory $categoryResourceFactory
     * @param CategoryRepositoryInterface $categoryRepository
     * @param Logger $logger
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        DataObject $configuration,
        CategoryResourceFactory $categoryResourceFactory,
        CategoryRepositoryInterface $categoryRepository,
        Logger $logger,
        array $data = []
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->resourceModel = $categoryResourceFactory->create();

        parent::__construct($context, $registry, $resource, $resourceCollection, $configuration, $logger, $data);
    }

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

        if (!$data['product_category_ids'] && $this->configuration->getData('product_assign_categories')) {
            $productAssignCategories = $this->configuration->getData('product_assign_categories');
            if ($productAssignCategories) {
                $productAssignCategories = json_decode($productAssignCategories);
            }
            $data['product_category_ids'] = $productAssignCategories ? implode(",", $productAssignCategories) : null;
        }

        if (is_null($data['product_category_ids'])) {
            return;
        }

        $categoryIds = explode(",", $data['product_category_ids']);

        $data['product_category_ids'] = $this->getMappedCategories($categoryIds);

        foreach ($data['product_category_ids'] as $key => $categoryId) {
            if (!$this->isCategoryExists($categoryId)) {
                unset($data['product_category_ids'][$key]);
            }
        }

        if (!count($data['product_category_ids'])) {
            return;
        }

        $this->getResource()->collect($data);
    }

    /**
     * @param string $categoryId
     * @return bool
     * @throws NoSuchEntityException
     */
    protected function isCategoryExists(string $categoryId): bool
    {
        if (isset($this->isCategoryExists[$categoryId])) {
            return $this->isCategoryExists[$categoryId];
        }

        try {
            $this->categoryRepository->get($categoryId);
            $this->isCategoryExists[$categoryId] = true;
        } catch (Exception $e) {
            $this->isCategoryExists[$categoryId] = false;
        }

        return $this->isCategoryExists[$categoryId];
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
     * @param string $categoryValue
     * @return string
     */
    protected function getMappedCategoryId(string $categoryValue): string
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
