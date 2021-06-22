<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ImageGalleryHeaderEntityType
 *
 *
 * XSD Type: ImageGalleryHeaderEntity
 */
class ImageGalleryHeaderEntityType extends ImageGalleryIdEntityType
{

    /**
     * @var string $refPathFileName
     */
    private $refPathFileName = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category
     */
    private $category = null;

    /**
     * Gets as refPathFileName
     *
     * @return string
     */
    public function getRefPathFileName()
    {
        return $this->refPathFileName;
    }

    /**
     * Sets a new refPathFileName
     *
     * @param string $refPathFileName
     * @return self
     */
    public function setRefPathFileName($refPathFileName)
    {
        $this->refPathFileName = $refPathFileName;
        return $this;
    }

    /**
     * Gets as category
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category
     * @return self
     */
    public function setCategory(CategoryEntityType $category)
    {
        $this->category = $category;
        return $this;
    }


}

