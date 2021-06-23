<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImagesListIdEntity
{

    /**
     * @var string
     */
    private $ItemSKU;

    /**
     * @var int
     */
    private $ItemOxId;

    /**
     * @var string
     */
    private $ThumbnailImgFileName;

    /**
     * @var string
     */
    private $ImgFileName;

    /**
     * @var string
     */
    private $ZoomImgFileName;

    /**
     * @return string
     */
    public function getItemSKU()
    {
        return $this->ItemSKU;
    }

    /**
     * @param string $ItemSKU
     * @return ImagesListIdEntity
     */
    public function withItemSKU($ItemSKU)
    {
        $new = clone $this;
        $new->ItemSKU = $ItemSKU;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemOxId()
    {
        return $this->ItemOxId;
    }

    /**
     * @param int $ItemOxId
     * @return ImagesListIdEntity
     */
    public function withItemOxId($ItemOxId)
    {
        $new = clone $this;
        $new->ItemOxId = $ItemOxId;

        return $new;
    }

    /**
     * @return string
     */
    public function getThumbnailImgFileName()
    {
        return $this->ThumbnailImgFileName;
    }

    /**
     * @param string $ThumbnailImgFileName
     * @return ImagesListIdEntity
     */
    public function withThumbnailImgFileName($ThumbnailImgFileName)
    {
        $new = clone $this;
        $new->ThumbnailImgFileName = $ThumbnailImgFileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getImgFileName()
    {
        return $this->ImgFileName;
    }

    /**
     * @param string $ImgFileName
     * @return ImagesListIdEntity
     */
    public function withImgFileName($ImgFileName)
    {
        $new = clone $this;
        $new->ImgFileName = $ImgFileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getZoomImgFileName()
    {
        return $this->ZoomImgFileName;
    }

    /**
     * @param string $ZoomImgFileName
     * @return ImagesListIdEntity
     */
    public function withZoomImgFileName($ZoomImgFileName)
    {
        $new = clone $this;
        $new->ZoomImgFileName = $ZoomImgFileName;

        return $new;
    }


}

