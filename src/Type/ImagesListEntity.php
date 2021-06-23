<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImagesListEntity
{

    /**
     * @var int
     */
    private $ParentID;

    /**
     * @var int
     */
    private $ImgWidth;

    /**
     * @var int
     */
    private $ImgHeight;

    /**
     * @var int
     */
    private $Position;

    /**
     * @var int
     */
    private $ThumbnailImgWidth;

    /**
     * @var int
     */
    private $ThumbnailChangeMode;

    /**
     * @var int
     */
    private $ZoomPosition;

    /**
     * @var int
     */
    private $ZoomWidth;

    /**
     * @var int
     */
    private $ZoomHeight;

    /**
     * @var string
     */
    private $ThumbnailImgUrl;

    /**
     * @var string
     */
    private $ImgUrl;

    /**
     * @var string
     */
    private $ZoomImgUrl;

    /**
     * @return int
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * @param int $ParentID
     * @return ImagesListEntity
     */
    public function withParentID($ParentID)
    {
        $new = clone $this;
        $new->ParentID = $ParentID;

        return $new;
    }

    /**
     * @return int
     */
    public function getImgWidth()
    {
        return $this->ImgWidth;
    }

    /**
     * @param int $ImgWidth
     * @return ImagesListEntity
     */
    public function withImgWidth($ImgWidth)
    {
        $new = clone $this;
        $new->ImgWidth = $ImgWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getImgHeight()
    {
        return $this->ImgHeight;
    }

    /**
     * @param int $ImgHeight
     * @return ImagesListEntity
     */
    public function withImgHeight($ImgHeight)
    {
        $new = clone $this;
        $new->ImgHeight = $ImgHeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return ImagesListEntity
     */
    public function withPosition($Position)
    {
        $new = clone $this;
        $new->Position = $Position;

        return $new;
    }

    /**
     * @return int
     */
    public function getThumbnailImgWidth()
    {
        return $this->ThumbnailImgWidth;
    }

    /**
     * @param int $ThumbnailImgWidth
     * @return ImagesListEntity
     */
    public function withThumbnailImgWidth($ThumbnailImgWidth)
    {
        $new = clone $this;
        $new->ThumbnailImgWidth = $ThumbnailImgWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getThumbnailChangeMode()
    {
        return $this->ThumbnailChangeMode;
    }

    /**
     * @param int $ThumbnailChangeMode
     * @return ImagesListEntity
     */
    public function withThumbnailChangeMode($ThumbnailChangeMode)
    {
        $new = clone $this;
        $new->ThumbnailChangeMode = $ThumbnailChangeMode;

        return $new;
    }

    /**
     * @return int
     */
    public function getZoomPosition()
    {
        return $this->ZoomPosition;
    }

    /**
     * @param int $ZoomPosition
     * @return ImagesListEntity
     */
    public function withZoomPosition($ZoomPosition)
    {
        $new = clone $this;
        $new->ZoomPosition = $ZoomPosition;

        return $new;
    }

    /**
     * @return int
     */
    public function getZoomWidth()
    {
        return $this->ZoomWidth;
    }

    /**
     * @param int $ZoomWidth
     * @return ImagesListEntity
     */
    public function withZoomWidth($ZoomWidth)
    {
        $new = clone $this;
        $new->ZoomWidth = $ZoomWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getZoomHeight()
    {
        return $this->ZoomHeight;
    }

    /**
     * @param int $ZoomHeight
     * @return ImagesListEntity
     */
    public function withZoomHeight($ZoomHeight)
    {
        $new = clone $this;
        $new->ZoomHeight = $ZoomHeight;

        return $new;
    }

    /**
     * @return string
     */
    public function getThumbnailImgUrl()
    {
        return $this->ThumbnailImgUrl;
    }

    /**
     * @param string $ThumbnailImgUrl
     * @return ImagesListEntity
     */
    public function withThumbnailImgUrl($ThumbnailImgUrl)
    {
        $new = clone $this;
        $new->ThumbnailImgUrl = $ThumbnailImgUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getImgUrl()
    {
        return $this->ImgUrl;
    }

    /**
     * @param string $ImgUrl
     * @return ImagesListEntity
     */
    public function withImgUrl($ImgUrl)
    {
        $new = clone $this;
        $new->ImgUrl = $ImgUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getZoomImgUrl()
    {
        return $this->ZoomImgUrl;
    }

    /**
     * @param string $ZoomImgUrl
     * @return ImagesListEntity
     */
    public function withZoomImgUrl($ZoomImgUrl)
    {
        $new = clone $this;
        $new->ZoomImgUrl = $ZoomImgUrl;

        return $new;
    }


}

