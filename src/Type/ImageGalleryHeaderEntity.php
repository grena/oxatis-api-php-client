<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryHeaderEntity extends \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity
{

    /**
     * @var bool
     */
    protected $DynamicImages;

    /**
     * @var string
     */
    protected $RefPathFileName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category;

    /**
     * @return bool
     */
    public function getDynamicImages()
    {
        return $this->DynamicImages;
    }

    /**
     * @param bool $DynamicImages
     * @return ImageGalleryHeaderEntity
     */
    public function withDynamicImages($DynamicImages)
    {
        $new = clone $this;
        $new->DynamicImages = $DynamicImages;

        return $new;
    }

    /**
     * @return string
     */
    public function getRefPathFileName()
    {
        return $this->RefPathFileName;
    }

    /**
     * @param string $RefPathFileName
     * @return ImageGalleryHeaderEntity
     */
    public function withRefPathFileName($RefPathFileName)
    {
        $new = clone $this;
        $new->RefPathFileName = $RefPathFileName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category
     * @return ImageGalleryHeaderEntity
     */
    public function withCategory($Category)
    {
        $new = clone $this;
        $new->Category = $Category;

        return $new;
    }


}

