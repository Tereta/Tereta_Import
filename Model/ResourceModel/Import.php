<?php
namespace Tereta\Import\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Import
 * @package Tereta\Import\Model\ResourceModel
 */
class Import extends AbstractDb
{
    /**
     * Init resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('tereta_import', 'entity_id');
    }
}