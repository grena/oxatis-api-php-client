<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductCategoryEntityType
 *
 *
 * XSD Type: ProductCategoryEntity
 */
class ProductCategoryEntityType extends CategoryEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $parentCategory
     */
    private $parentCategory = null;

    /**
     * @var string $header
     */
    private $header = null;

    /**
     * @var string $metaKeywords
     */
    private $metaKeywords = null;

    /**
     * @var string $metaDescription
     */
    private $metaDescription = null;

    /**
     * @var string $metaTitle
     */
    private $metaTitle = null;

    /**
     * @var string $imgFileName
     */
    private $imgFileName = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as parentCategory
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getParentCategory()
    {
        return $this->parentCategory;
    }

    /**
     * Sets a new parentCategory
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $parentCategory
     * @return self
     */
    public function setParentCategory(CategoryEntityType $parentCategory)
    {
        $this->parentCategory = $parentCategory;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param string $header
     * @return self
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Gets as metaKeywords
     *
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Sets a new metaKeywords
     *
     * @param string $metaKeywords
     * @return self
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }

    /**
     * Gets as metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Sets a new metaDescription
     *
     * @param string $metaDescription
     * @return self
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * Gets as metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Sets a new metaTitle
     *
     * @param string $metaTitle
     * @return self
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

