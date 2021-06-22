<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ImagesListEntityType
 *
 *
 * XSD Type: ImagesListEntity
 */
class ImagesListEntityType extends ImagesListIdEntityType
{

    /**
     * @var int $parentID
     */
    private $parentID = null;

    /**
     * @var int $imgWidth
     */
    private $imgWidth = null;

    /**
     * @var int $imgHeight
     */
    private $imgHeight = null;

    /**
     * @var int $position
     */
    private $position = null;

    /**
     * @var int $thumbnailImgWidth
     */
    private $thumbnailImgWidth = null;

    /**
     * @var int $thumbnailChangeMode
     */
    private $thumbnailChangeMode = null;

    /**
     * @var int $zoomPosition
     */
    private $zoomPosition = null;

    /**
     * @var int $zoomWidth
     */
    private $zoomWidth = null;

    /**
     * @var int $zoomHeight
     */
    private $zoomHeight = null;

    /**
     * Gets as parentID
     *
     * @return int
     */
    public function getParentID()
    {
        return $this->parentID;
    }

    /**
     * Sets a new parentID
     *
     * @param int $parentID
     * @return self
     */
    public function setParentID($parentID)
    {
        $this->parentID = $parentID;
        return $this;
    }

    /**
     * Gets as imgWidth
     *
     * @return int
     */
    public function getImgWidth()
    {
        return $this->imgWidth;
    }

    /**
     * Sets a new imgWidth
     *
     * @param int $imgWidth
     * @return self
     */
    public function setImgWidth($imgWidth)
    {
        $this->imgWidth = $imgWidth;
        return $this;
    }

    /**
     * Gets as imgHeight
     *
     * @return int
     */
    public function getImgHeight()
    {
        return $this->imgHeight;
    }

    /**
     * Sets a new imgHeight
     *
     * @param int $imgHeight
     * @return self
     */
    public function setImgHeight($imgHeight)
    {
        $this->imgHeight = $imgHeight;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as thumbnailImgWidth
     *
     * @return int
     */
    public function getThumbnailImgWidth()
    {
        return $this->thumbnailImgWidth;
    }

    /**
     * Sets a new thumbnailImgWidth
     *
     * @param int $thumbnailImgWidth
     * @return self
     */
    public function setThumbnailImgWidth($thumbnailImgWidth)
    {
        $this->thumbnailImgWidth = $thumbnailImgWidth;
        return $this;
    }

    /**
     * Gets as thumbnailChangeMode
     *
     * @return int
     */
    public function getThumbnailChangeMode()
    {
        return $this->thumbnailChangeMode;
    }

    /**
     * Sets a new thumbnailChangeMode
     *
     * @param int $thumbnailChangeMode
     * @return self
     */
    public function setThumbnailChangeMode($thumbnailChangeMode)
    {
        $this->thumbnailChangeMode = $thumbnailChangeMode;
        return $this;
    }

    /**
     * Gets as zoomPosition
     *
     * @return int
     */
    public function getZoomPosition()
    {
        return $this->zoomPosition;
    }

    /**
     * Sets a new zoomPosition
     *
     * @param int $zoomPosition
     * @return self
     */
    public function setZoomPosition($zoomPosition)
    {
        $this->zoomPosition = $zoomPosition;
        return $this;
    }

    /**
     * Gets as zoomWidth
     *
     * @return int
     */
    public function getZoomWidth()
    {
        return $this->zoomWidth;
    }

    /**
     * Sets a new zoomWidth
     *
     * @param int $zoomWidth
     * @return self
     */
    public function setZoomWidth($zoomWidth)
    {
        $this->zoomWidth = $zoomWidth;
        return $this;
    }

    /**
     * Gets as zoomHeight
     *
     * @return int
     */
    public function getZoomHeight()
    {
        return $this->zoomHeight;
    }

    /**
     * Sets a new zoomHeight
     *
     * @param int $zoomHeight
     * @return self
     */
    public function setZoomHeight($zoomHeight)
    {
        $this->zoomHeight = $zoomHeight;
        return $this;
    }


}

