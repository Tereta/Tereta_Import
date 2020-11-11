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

use Magento\Catalog\Model\Product as ProductModel;
use Magento\Eav\Model\AttributeRepository;
use Magento\Framework\Filesystem\Io\File as IoFile;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Tereta\Import\Helper\Data as DataHelper;
use Exception;

/**
 * Tereta\Import\Model\ResourceModel\Core\Scope\Media
 *
 * Class Media
 * @package Tereta\Import\Model\ResourceModel\Core\Scope
 * @author Tereta Alexander <tereta@mail.ua>
 */
class Media extends AbstractDb
{
    const MEDIA_GALLERY_ATTRIBUTE_CODE = 'media_gallery';

    /**
     * @var AttributeRepository
     */
    protected $attributeRepository;

    /**
     * @var DataHelper
     */
    protected $dataHelper;

    /**
     * @var IoFile
     */
    protected $ioFile;

    /**
     * @var array
     */
    protected $mediaImagesCollected = [];

    /**
     * @var array
     */
    protected $mediaImagesUrlCollected = [];

    /**
     * Media constructor.
     * @param IoFile $ioFile
     * @param DataHelper $dataHelper
     * @param AttributeRepository $attributeRepository
     * @param Context $context
     * @param null $connectionName
     */
    public function __construct(
        IoFile $ioFile,
        DataHelper $dataHelper,
        AttributeRepository $attributeRepository,
        Context $context,
        $connectionName = null
    ) {
        $this->ioFile = $ioFile;
        $this->dataHelper = $dataHelper;
        $this->attributeRepository = $attributeRepository;
        parent::__construct($context, $connectionName);
    }

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('catalog_product_entity_media_gallery', 'entity_id');
    }

    /**
     * @param string $sku
     * @param array $data
     * @param $mediaImageUrlString
     */
    public function collect(string $sku, array &$data, $mediaImageUrlString): void
    {
        if (!trim($mediaImageUrlString)) {
            return;
        }

        $mediaImageUrlExplode = explode("\n", $mediaImageUrlString);
        foreach ($mediaImageUrlExplode as $mediaImageUrl) {
            $mediaImageUrl = trim($mediaImageUrl);
            if (!$mediaImageUrl) {
                continue;
            }

            try {
                $filePath = $this->downloadRemoteImage($mediaImageUrl);
            } catch (\Exception $e) {
                $this->logger->warning($e->getMessage());
                continue;
            }

            if (!isset($data['image']) || !$data['image']) {
                $data['image'] = $filePath;
            }

            if (!isset($data['small_image']) || !$data['small_image']) {
                $data['small_image'] = $filePath;
            }

            if (!isset($data['swatch_image']) || !$data['swatch_image']) {
                $data['swatch_image'] = $filePath;
            }

            if (!isset($data['thumbnail']) || !$data['thumbnail']) {
                $data['thumbnail'] = $filePath;
            }

            array_push($this->mediaImagesCollected, [
                'entity_id' => null,
                'sku' => $sku,
                'url' => $mediaImageUrl,
                'path' => $filePath,
                'value_id' => null
            ]);

            if (!in_array($mediaImageUrl, $this->mediaImagesUrlCollected)) {
                array_push($this->mediaImagesUrlCollected, $mediaImageUrl);
            }
        }
    }

    /**
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function saveCollectedMedia(): void
    {
        $time = time();
        $attributeModel = $this->attributeRepository->get(ProductModel::ENTITY, static::MEDIA_GALLERY_ATTRIBUTE_CODE);

        $mediaGalleryInsert = [];
        $mediaGalleryUrlInsert = [];

        $connection = $this->getConnection();
        $select = $connection->select(['value_id', 'url'])->from($this->getTable('tereta_import_media'))->where('url IN (?)', $this->mediaImagesUrlCollected);

        $savedImages = [];
        foreach ($connection->fetchAll($select) as $item) {
            $savedImages[$item['value_id']] = $item['url'];
        }

        $valueId = $this->getLastMediaGalleryId();
        $addedCount = 0;
        foreach ($this->mediaImagesCollected as $key=>$imageData) {
            $url = $imageData['url'];
            $filePath = $imageData['path'];

            if (in_array($url, $savedImages)) {
                continue;
            }

            $addedCount++;
            $valueId++;

            $mediaGalleryUrlInsert[$key] = [
                'value_id' => $valueId,
                'url' => $url
            ];

            $mediaGalleryInsert[$key] = [
                'value_id' => $valueId,
                'attribute_id' => $attributeModel->getAttributeId(),
                'value' => $filePath,
                'media_type' => 'image',
                'disabled' => 0
            ];

            $savedImages[$valueId] = $url;
        }

        if ($mediaGalleryInsert) {
            $connection->insertArray(
                $this->getTable('catalog_product_entity_media_gallery'),
                ['value_id', 'attribute_id', 'value', 'media_type', 'disabled'],
                $mediaGalleryInsert
            );
        }

        if ($mediaGalleryUrlInsert) {
            $connection->insertArray(
                $this->getTable('tereta_import_media'),
                ['value_id', 'url'],
                $mediaGalleryUrlInsert
            );
        }

        $this->logger->debug(__('Uploaded and saved %1 images (%2sec).', $addedCount, (time() - $time)));

        // Assign images to products
        $mediaGalleryValueInsert = [];
        $mediaGalleryValueToEntityInsert = [];
        $urlValueIds = array_flip($savedImages);

        foreach ($this->mediaImagesCollected as $key => $item) {
            $this->mediaImagesCollected[$key]['value_id'] = $urlValueIds[$item['url']];
            $item['value_id'] = $this->mediaImagesCollected[$key]['value_id'];

            array_push($mediaGalleryValueInsert, [
                'value_id' => $item['value_id'],
                'store_id' => 0,
                'entity_id' => $item['entity_id'],
                'label' => '',
                'position' => 1,
                'disabled' => 0
                // record_id : AUTO_INCREMENT
            ]);

            array_push($mediaGalleryValueToEntityInsert, [
                'value_id' => $item['value_id'],
                'entity_id' => $item['entity_id']
            ]);
        }

        if ($mediaGalleryValueInsert) {
            $connection->insertOnDuplicate(
                $this->getTable('catalog_product_entity_media_gallery_value'),
                $mediaGalleryValueInsert,
                ['value_id', 'store_id', 'entity_id', 'label', 'position', 'disabled']
            );
        }

        if ($mediaGalleryValueToEntityInsert) {
            $connection->insertOnDuplicate(
                $this->getTable('catalog_product_entity_media_gallery_value_to_entity'),
                $mediaGalleryValueToEntityInsert,
                ['value_id', 'entity_id']
            );
        }

        $this->logger->debug('Assigning (updating) to products ' . count($this->mediaImagesCollected) . ' images, time spent: ' . (time() - $time) . 'sec.');
    }

    /**
     * @param string $url
     * @return string
     * @throws Exception
     */
    protected function downloadRemoteImage(string $url): string
    {
        list($fullPath, $filePath) = $this->dataHelper->getLocalFilePath($url);
        $pathInfo = pathinfo($fullPath);
        $dirPath = $pathInfo['dirname'];
        if (!is_dir($dirPath)) {
            $this->ioFile->mkdir($dirPath, 0775);
        }
        if (!$this->ioFile->read($url, $fullPath)) {
            throw new Exception('Can not download and save remote file ("' . $url . '" > "' . $fullPath . '")');
        }

        return $filePath;
    }

    /**
     * @param $skuEntities
     */
    public function fillEntityIds($skuEntities): void
    {
        foreach ($this->mediaImagesCollected as $key => $item) {
            $this->mediaImagesCollected[$key]['entity_id'] = $skuEntities->getData($item['sku'])['entity_id'];
        }
    }

    /**
     * @return int
     */
    public function getLastMediaGalleryId(): int
    {
        $connection = $this->getConnection();
        $select = $connection->select('value_id')->from($this->getTable('catalog_product_entity_media_gallery'))->order('value_id DESC')->limit(1);
        return (integer) $connection->fetchOne($select);
    }
}
