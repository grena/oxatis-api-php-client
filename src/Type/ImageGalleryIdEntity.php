<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryIdEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $FileName;

    /**
     * @var string
     */
    protected $ImageUrl;

    /**
     * @var int
     */
    protected $FileSize;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ImageGalleryIdEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return ImageGalleryIdEntity
     */
    public function withFileName($FileName)
    {
        $new = clone $this;
        $new->FileName = $FileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param string $ImageUrl
     * @return ImageGalleryIdEntity
     */
    public function withImageUrl($ImageUrl)
    {
        $new = clone $this;
        $new->ImageUrl = $ImageUrl;

        return $new;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }

    /**
     * @param int $FileSize
     * @return ImageGalleryIdEntity
     */
    public function withFileSize($FileSize)
    {
        $new = clone $this;
        $new->FileSize = $FileSize;

        return $new;
    }


}

