<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductCategoryEntity
{

    /**
     * @var string
     */
    private $Header;

    /**
     * @var string
     */
    private $MetaKeywords;

    /**
     * @var string
     */
    private $MetaDescription;

    /**
     * @var string
     */
    private $MetaTitle;

    /**
     * @var string
     */
    private $ImgFileName;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $MobileHeader;

    /**
     * @var string
     */
    private $CanonicalURLCustomizedContent;

    /**
     * @var string
     */
    private $LogicalName;

    /**
     * @var int
     */
    private $Visibility;

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * @param string $Header
     * @return ProductCategoryEntity
     */
    public function withHeader($Header)
    {
        $new = clone $this;
        $new->Header = $Header;

        return $new;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->MetaKeywords;
    }

    /**
     * @param string $MetaKeywords
     * @return ProductCategoryEntity
     */
    public function withMetaKeywords($MetaKeywords)
    {
        $new = clone $this;
        $new->MetaKeywords = $MetaKeywords;

        return $new;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->MetaDescription;
    }

    /**
     * @param string $MetaDescription
     * @return ProductCategoryEntity
     */
    public function withMetaDescription($MetaDescription)
    {
        $new = clone $this;
        $new->MetaDescription = $MetaDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->MetaTitle;
    }

    /**
     * @param string $MetaTitle
     * @return ProductCategoryEntity
     */
    public function withMetaTitle($MetaTitle)
    {
        $new = clone $this;
        $new->MetaTitle = $MetaTitle;

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
     * @return ProductCategoryEntity
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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ProductCategoryEntity
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getMobileHeader()
    {
        return $this->MobileHeader;
    }

    /**
     * @param string $MobileHeader
     * @return ProductCategoryEntity
     */
    public function withMobileHeader($MobileHeader)
    {
        $new = clone $this;
        $new->MobileHeader = $MobileHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getCanonicalURLCustomizedContent()
    {
        return $this->CanonicalURLCustomizedContent;
    }

    /**
     * @param string $CanonicalURLCustomizedContent
     * @return ProductCategoryEntity
     */
    public function withCanonicalURLCustomizedContent($CanonicalURLCustomizedContent)
    {
        $new = clone $this;
        $new->CanonicalURLCustomizedContent = $CanonicalURLCustomizedContent;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogicalName()
    {
        return $this->LogicalName;
    }

    /**
     * @param string $LogicalName
     * @return ProductCategoryEntity
     */
    public function withLogicalName($LogicalName)
    {
        $new = clone $this;
        $new->LogicalName = $LogicalName;

        return $new;
    }

    /**
     * @return int
     */
    public function getVisibility()
    {
        return $this->Visibility;
    }

    /**
     * @param int $Visibility
     * @return ProductCategoryEntity
     */
    public function withVisibility($Visibility)
    {
        $new = clone $this;
        $new->Visibility = $Visibility;

        return $new;
    }


}

