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
    /**
     * @var ModelImportFactory
     */
    protected $modelImportFactory;

    /**
     * @var ResourceImport
     */
    protected $resourceImport;

    /**
     * @var array
     */
    protected $getById = [];

    /**
     * @var array
     */
    protected $getByIdentifier = [];

    /**
     * Repository constructor.
     * @param ModelImportFactory $modelImportFactory
     * @param ResourceImport $resourceImport
     */
    public function __construct(ModelImportFactory $modelImportFactory, ResourceImport $resourceImport)
    {
        $this->modelImportFactory = $modelImportFactory;
        $this->resourceImport = $resourceImport;
    }

    /**
     * @param int $id
     * @return ModelImport
     */
    public function getById(int $id): ModelImport
    {
        if (isset($this->getById[$id])) {
            return $this->getById[$id];
        }
        $modelImport = $this->modelImportFactory->create();
        $this->resourceImport->load($modelImport, $id);
        if (!$modelImport->getId()) {
            throw new Exception(__('The "#%1" import model was not found', $id));
        }

        $this->cacheModel($modelImport);

        return $this->getById[$id];
    }

    /**
     * @param string $identifier
     * @return ModelImport
     */
    public function getByIdentifier(string $identifier): ModelImport
    {
        if (isset($this->getByIdentifier[$identifier])) {
            return $this->getByIdentifier[$identifier];
        }
        $modelImport = $this->modelImportFactory->create();
        $this->resourceImport->load($modelImport, $identifier, 'identifier');
        if (!$modelImport->getId()) {
            throw new Exception(__('The "#%1" import model was not found', $identifier));
        }

        $this->cacheModel($modelImport);

        return $this->getByIdentifier[$identifier];
    }

    /**
     * @param ModelImport $modelImport
     */
    protected function cacheModel(ModelImport $modelImport): void
    {
        $this->getById[$modelImport->getEntityId()] = $modelImport;
        $this->getByIdentifier[$modelImport->getIdentifier()] = $modelImport;
    }
}
