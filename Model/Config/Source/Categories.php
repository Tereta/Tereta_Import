<?php
namespace Tereta\Import\Model\Config\Source;

use Magento\Catalog\Model\CategoryFactory;
use Magento\Catalog\Api\CategoryRepositoryInterface;

/**
 * Tereta\Import\Model\Config\Source\Categories
 *
 * Class Categories
 * @package Tereta\Import\Model\Config\Source
 */
class Categories implements \Magento\Framework\Option\ArrayInterface
{
    protected $categoryTree;
    protected $categoryRepository;

    public function __construct(CategoryFactory $categoryFactory, CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryFactory = $categoryFactory;
        $this->categoryRepository = $categoryRepository;
    }

    public function toOptionArray()
    {
        $data = [
            'value' => 0,
             'is_active' => true
        ];

        $this->fillChildCategories($data);

        $data = array_shift($data['optgroup']);
        $data = $data['optgroup'];

        return $data;
    }

    protected function fillChildCategories(&$data)
    {
        $childCategories = $this->getCategoriesByParent($data['value']);
        if (count($childCategories)) {
            $data['optgroup'] = [];

            foreach($childCategories as $itemData){
                $item = [
                    'value' => $itemData->getId(),
                    'is_active' => 1,
                    'label' => $itemData->getName()
                ];

                $this->fillChildCategories($item);

                array_push($data['optgroup'], $item);
            }
        }
    }

    protected function getCategoriesByParent($parentId)
    {
        $categoryCollection = $this->categoryFactory->create()->getCollection();
        $categoryCollection->addFieldToFilter('parent_id', $parentId);
        $categoryCollection->addAttributeToSelect('name', 'left');

        return $categoryCollection;
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