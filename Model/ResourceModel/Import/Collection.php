<?php
namespace Tereta\Import\Model\ResourceModel\Import;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Init collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Tereta\Import\Model\Import', 'Tereta\Import\Model\ResourceModel\Import');
    }

}
