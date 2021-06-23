<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryHeaderEntity
{

    /**
     * @var bool
     */
    private $DynamicImages;

    /**
     * @var string
     */
    private $RefPathFileName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category;

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

