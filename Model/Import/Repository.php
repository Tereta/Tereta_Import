<?php
namespace Tereta\Import\Model\Import;

use Tereta\Import\Model\Import as ModelImport;
use Tereta\Import\Model\ImportFactory as ModelImportFactory;
use Tereta\Import\Model\ResourceModel\Import as ResourceImport;

/**
 * Tereta\Import\Model\Import\Repository
 *
 * Class Repository
 * @package Tereta\Import\Model\Import
 */
class Repository
{
    protected $modelImportFactory;
    protected $resourceImport;
    protected $getById = [];

    public function __construct(ModelImportFactory $modelImportFactory, ResourceImport $resourceImport)
    {
        $this->modelImportFactory = $modelImportFactory;
        $this->resourceImport = $resourceImport;
    }

    public function getById(int $id): ModelImport
    {
        if (isset($this->getById[$id])) {
            return $this->getById[$id];
        }
        $modelImport = $this->modelImportFactory->create();
        $this->resourceImport->load($modelImport, $id);
        if (!$modelImport->getId()) {
            throw new Exception(__('The #%1 import model was not found', $id));
        }

        $this->getById[$id] = $modelImport;
        return $this->getById[$id];
    }
}
