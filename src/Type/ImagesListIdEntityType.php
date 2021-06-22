<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ImagesListIdEntityType
 *
 *
 * XSD Type: ImagesListIdEntity
 */
class ImagesListIdEntityType extends OxatisEntityType
{

    /**
     * @var string $thumbnailImgFileName
     */
    private $thumbnailImgFileName = null;

    /**
     * @var int $itemOxId
     */
    private $itemOxId = null;

    /**
     * @var string $itemSKU
     */
    private $itemSKU = null;

    /**
     * @var string $imgFileName
     */
    private $imgFileName = null;

    /**
     * @var string $zoomImgFileName
     */
    private $zoomImgFileName = null;

    /**
     * Gets as thumbnailImgFileName
     *
     * @return string
     */
    public function getThumbnailImgFileName()
    {
        return $this->thumbnailImgFileName;
    }

    /**
     * Sets a new thumbnailImgFileName
     *
     * @param string $thumbnailImgFileName
     * @return self
     */
    public function setThumbnailImgFileName($thumbnailImgFileName)
    {
        $this->thumbnailImgFileName = $thumbnailImgFileName;
        return $this;
    }

    /**
     * Gets as itemOxId
     *
     * @return int
     */
    public function getItemOxId()
    {
        return $this->itemOxId;
    }

    /**
     * Sets a new itemOxId
     *
     * @param int $itemOxId
     * @return self
     */
    public function setItemOxId($itemOxId)
    {
        $this->itemOxId = $itemOxId;
        return $this;
    }

    /**
     * Gets as itemSKU
     *
     * @return string
     */
    public function getItemSKU()
    {
        return $this->itemSKU;
    }

    /**
     * Sets a new itemSKU
     *
     * @param string $itemSKU
     * @return self
     */
    public function setItemSKU($itemSKU)
    {
        $this->itemSKU = $itemSKU;
        return $this;
    }

    /**
     * Gets as imgFileName
     *
     * @return string
     */
    public function getImgFileName()
    {
        return $this->imgFileName;
    }

    /**
     * Sets a new imgFileName
     *
     * @param string $imgFileName
     * @return self
     */
    public function setImgFileName($imgFileName)
    {
        $this->imgFileName = $imgFileName;
        return $this;
    }

    /**
     * Gets as zoomImgFileName
     *
     * @return string
     */
    public function getZoomImgFileName()
    {
        return $this->zoomImgFileName;
    }

    /**
     * Sets a new zoomImgFileName
     *
     * @param string $zoomImgFileName
     * @return self
     */
    public function setZoomImgFileName($zoomImgFileName)
    {
        $this->zoomImgFileName = $zoomImgFileName;
        return $this;
    }


}

