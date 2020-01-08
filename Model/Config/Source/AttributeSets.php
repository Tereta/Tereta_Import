<?php
namespace Tereta\Import\Model\Config\Source;

use Magento\Eav\Api\AttributeSetRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\FilterBuilder;

/**
 * Tereta\Import\Model\Config\Source\Categories
 *
 * Class AttributeSets
 * @package Tereta\Import\Model\Config\Source
 */
class AttributeSets implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var AttributeSetRepositoryInterface
     */
    protected $attributeSetRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @var FilterBuilder
     */
    protected $filterBuilder;

    /**
     * AttributeSets constructor.
     * @param AttributeSetRepositoryInterface $attributeSetRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param FilterBuilder $filterBuilder
     */
    public function __construct(AttributeSetRepositoryInterface $attributeSetRepository,  SearchCriteriaBuilder $searchCriteriaBuilder, FilterBuilder $filterBuilder)
    {
        $this->filterBuilder = $filterBuilder;
        $this->attributeSetRepository = $attributeSetRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $dataList = [];

        $filter = $this->filterBuilder->setField('entity_type_id')->setValue(4)->create();
        $searchCriteria = $this->searchCriteriaBuilder->addFilters([$filter])->create();
        $attributeList = $this->attributeSetRepository->getList($searchCriteria);

        foreach($attributeList->getItems() as $item) {
            array_push($dataList, [
                'value' => $item->getAttributeSetId(),
                'is_active' => true,
                'label' => $item->getAttributeSetName()
            ]);
        }

        return $dataList;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [];
    }
}