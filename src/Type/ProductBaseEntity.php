<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductBaseEntity
{

    /**
     * @var int
     */
    private $OptPropertyID;

    /**
     * @var bool
     */
    private $DynamicImages;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price;

    /**
     * @var float
     */
    private $TaxRate;

    /**
     * @var float
     */
    private $EcotaxTI;

    /**
     * @var string
     */
    private $LongDescription;

    /**
     * @var string
     */
    private $BigImgFileName;

    /**
     * @var string
     */
    private $SmallImgFileName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category3;

    /**
     * @var string
     */
    private $FamilyName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BrandEntity
     */
    private $Brand;

    /**
     * @var bool
     */
    private $ShowInStockNote;

    /**
     * @var bool
     */
    private $ShowStockLevel;

    /**
     * @var int
     */
    private $DaysToShip;

    /**
     * @var bool
     */
    private $ShowIfOutOfStock;

    /**
     * @var bool
     */
    private $SaleIfOutOfStock;

    /**
     * @var int
     */
    private $SaleIfOutOfStockScenario;

    /**
     * @var bool
     */
    private $ShowDaysToship;

    /**
     * @var int
     */
    private $Weight;

    /**
     * @var int
     */
    private $DimensionHeight;

    /**
     * @var int
     */
    private $DimensionWidth;

    /**
     * @var int
     */
    private $DimensionLength;

    /**
     * @var float
     */
    private $HandlingSurcharge1ST;

    /**
     * @var float
     */
    private $HandlingSurchargeOthers;

    /**
     * @var float
     */
    private $ShipPrice;

    /**
     * @var string
     */
    private $DiscountGridCode;

    /**
     * @var string
     */
    private $MetaTitle;

    /**
     * @var string
     */
    private $CanonicalURLCustomizedContent;

    /**
     * @var string
     */
    private $MetaDescription;

    /**
     * @var string
     */
    private $MetaKeywords;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price4;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price5;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price6;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price7;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price8;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $Price9;

    /**
     * @var \DateTimeInterface
     */
    private $LastUpdateDate;

    /**
     * @var int
     */
    private $AdditionalImagesWidth;

    /**
     * @var int
     */
    private $AdditionalImagesHeight;

    /**
     * @var int
     */
    private $AdditionalImagesThumbnailWidth;

    /**
     * @var int
     */
    private $AdditionalImagesThumbnailChangeMode;

    /**
     * @var int
     */
    private $AdditionalImagesZoomWidth;

    /**
     * @var int
     */
    private $AdditionalImagesZoomHeight;

    /**
     * @var int
     */
    private $LinkedItemID;

    /**
     * @var string
     */
    private $LinkedItemSKU;

    /**
     * @var string
     */
    private $LinkedItemLanguage;

    /**
     * @var int
     */
    private $AdditionalImagesZoomPosition;

    /**
     * @var string
     */
    private $UrlExternalLink;

    /**
     * @var bool
     */
    private $OptionIsDefault;

    /**
     * @var string
     */
    private $EANCode;

    /**
     * @var int
     */
    private $ItemCondition;

    /**
     * @var int
     */
    private $Guarantee;

    /**
     * @var bool
     */
    private $Visible;

    /**
     * @var int
     */
    private $Position;

    /**
     * @var string
     */
    private $MPN;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice4;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice5;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice6;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice7;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice8;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    private $StrikethroughPrice9;

    /**
     * @var string
     */
    private $TaxCountryISOCode;

    /**
     * @var float
     */
    private $Cost;

    /**
     * @var float
     */
    private $ReviewRating;

    /**
     * @var int
     */
    private $ReviewCount;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId4;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId5;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId6;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId7;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId8;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    private $DiscountRuleId9;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var int
     */
    private $ItemType;

    /**
     * @var \DateTimeInterface
     */
    private $DateOfAvailability;

    /**
     * @var int
     */
    private $HighlightType;

    /**
     * @var int
     */
    private $State;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category4;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category5;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category6;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category7;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category8;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category9;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    private $Category10;

    /**
     * @var \DateTimeInterface
     */
    private $CreationDate;

    /**
     * @var bool
     */
    private $HasAttributes;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfImagesListIdEntity
     */
    private $ImagesList;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfTaxAmountEntity
     */
    private $TaxAmountList;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity
     */
    private $TaxClass;

    /**
     * @return int
     */
    public function getOptPropertyID()
    {
        return $this->OptPropertyID;
    }

    /**
     * @param int $OptPropertyID
     * @return ProductBaseEntity
     */
    public function withOptPropertyID($OptPropertyID)
    {
        $new = clone $this;
        $new->OptPropertyID = $OptPropertyID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDynamicImages()
    {
        return $this->DynamicImages;
    }

    /**
     * @param bool $DynamicImages
     * @return ProductBaseEntity
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ProductBaseEntity
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
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ProductBaseEntity
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price
     * @return ProductBaseEntity
     */
    public function withPrice($Price)
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return ProductBaseEntity
     */
    public function withTaxRate($TaxRate)
    {
        $new = clone $this;
        $new->TaxRate = $TaxRate;

        return $new;
    }

    /**
     * @return float
     */
    public function getEcotaxTI()
    {
        return $this->EcotaxTI;
    }

    /**
     * @param float $EcotaxTI
     * @return ProductBaseEntity
     */
    public function withEcotaxTI($EcotaxTI)
    {
        $new = clone $this;
        $new->EcotaxTI = $EcotaxTI;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     * @return ProductBaseEntity
     */
    public function withLongDescription($LongDescription)
    {
        $new = clone $this;
        $new->LongDescription = $LongDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getBigImgFileName()
    {
        return $this->BigImgFileName;
    }

    /**
     * @param string $BigImgFileName
     * @return ProductBaseEntity
     */
    public function withBigImgFileName($BigImgFileName)
    {
        $new = clone $this;
        $new->BigImgFileName = $BigImgFileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSmallImgFileName()
    {
        return $this->SmallImgFileName;
    }

    /**
     * @param string $SmallImgFileName
     * @return ProductBaseEntity
     */
    public function withSmallImgFileName($SmallImgFileName)
    {
        $new = clone $this;
        $new->SmallImgFileName = $SmallImgFileName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory1()
    {
        return $this->Category1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category1
     * @return ProductBaseEntity
     */
    public function withCategory1($Category1)
    {
        $new = clone $this;
        $new->Category1 = $Category1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory2()
    {
        return $this->Category2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category2
     * @return ProductBaseEntity
     */
    public function withCategory2($Category2)
    {
        $new = clone $this;
        $new->Category2 = $Category2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory3()
    {
        return $this->Category3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category3
     * @return ProductBaseEntity
     */
    public function withCategory3($Category3)
    {
        $new = clone $this;
        $new->Category3 = $Category3;

        return $new;
    }

    /**
     * @return string
     */
    public function getFamilyName()
    {
        return $this->FamilyName;
    }

    /**
     * @param string $FamilyName
     * @return ProductBaseEntity
     */
    public function withFamilyName($FamilyName)
    {
        $new = clone $this;
        $new->FamilyName = $FamilyName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\BrandEntity
     */
    public function getBrand()
    {
        return $this->Brand;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\BrandEntity $Brand
     * @return ProductBaseEntity
     */
    public function withBrand($Brand)
    {
        $new = clone $this;
        $new->Brand = $Brand;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowInStockNote()
    {
        return $this->ShowInStockNote;
    }

    /**
     * @param bool $ShowInStockNote
     * @return ProductBaseEntity
     */
    public function withShowInStockNote($ShowInStockNote)
    {
        $new = clone $this;
        $new->ShowInStockNote = $ShowInStockNote;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowStockLevel()
    {
        return $this->ShowStockLevel;
    }

    /**
     * @param bool $ShowStockLevel
     * @return ProductBaseEntity
     */
    public function withShowStockLevel($ShowStockLevel)
    {
        $new = clone $this;
        $new->ShowStockLevel = $ShowStockLevel;

        return $new;
    }

    /**
     * @return int
     */
    public function getDaysToShip()
    {
        return $this->DaysToShip;
    }

    /**
     * @param int $DaysToShip
     * @return ProductBaseEntity
     */
    public function withDaysToShip($DaysToShip)
    {
        $new = clone $this;
        $new->DaysToShip = $DaysToShip;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowIfOutOfStock()
    {
        return $this->ShowIfOutOfStock;
    }

    /**
     * @param bool $ShowIfOutOfStock
     * @return ProductBaseEntity
     */
    public function withShowIfOutOfStock($ShowIfOutOfStock)
    {
        $new = clone $this;
        $new->ShowIfOutOfStock = $ShowIfOutOfStock;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSaleIfOutOfStock()
    {
        return $this->SaleIfOutOfStock;
    }

    /**
     * @param bool $SaleIfOutOfStock
     * @return ProductBaseEntity
     */
    public function withSaleIfOutOfStock($SaleIfOutOfStock)
    {
        $new = clone $this;
        $new->SaleIfOutOfStock = $SaleIfOutOfStock;

        return $new;
    }

    /**
     * @return int
     */
    public function getSaleIfOutOfStockScenario()
    {
        return $this->SaleIfOutOfStockScenario;
    }

    /**
     * @param int $SaleIfOutOfStockScenario
     * @return ProductBaseEntity
     */
    public function withSaleIfOutOfStockScenario($SaleIfOutOfStockScenario)
    {
        $new = clone $this;
        $new->SaleIfOutOfStockScenario = $SaleIfOutOfStockScenario;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowDaysToship()
    {
        return $this->ShowDaysToship;
    }

    /**
     * @param bool $ShowDaysToship
     * @return ProductBaseEntity
     */
    public function withShowDaysToship($ShowDaysToship)
    {
        $new = clone $this;
        $new->ShowDaysToship = $ShowDaysToship;

        return $new;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param int $Weight
     * @return ProductBaseEntity
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return int
     */
    public function getDimensionHeight()
    {
        return $this->DimensionHeight;
    }

    /**
     * @param int $DimensionHeight
     * @return ProductBaseEntity
     */
    public function withDimensionHeight($DimensionHeight)
    {
        $new = clone $this;
        $new->DimensionHeight = $DimensionHeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getDimensionWidth()
    {
        return $this->DimensionWidth;
    }

    /**
     * @param int $DimensionWidth
     * @return ProductBaseEntity
     */
    public function withDimensionWidth($DimensionWidth)
    {
        $new = clone $this;
        $new->DimensionWidth = $DimensionWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getDimensionLength()
    {
        return $this->DimensionLength;
    }

    /**
     * @param int $DimensionLength
     * @return ProductBaseEntity
     */
    public function withDimensionLength($DimensionLength)
    {
        $new = clone $this;
        $new->DimensionLength = $DimensionLength;

        return $new;
    }

    /**
     * @return float
     */
    public function getHandlingSurcharge1ST()
    {
        return $this->HandlingSurcharge1ST;
    }

    /**
     * @param float $HandlingSurcharge1ST
     * @return ProductBaseEntity
     */
    public function withHandlingSurcharge1ST($HandlingSurcharge1ST)
    {
        $new = clone $this;
        $new->HandlingSurcharge1ST = $HandlingSurcharge1ST;

        return $new;
    }

    /**
     * @return float
     */
    public function getHandlingSurchargeOthers()
    {
        return $this->HandlingSurchargeOthers;
    }

    /**
     * @param float $HandlingSurchargeOthers
     * @return ProductBaseEntity
     */
    public function withHandlingSurchargeOthers($HandlingSurchargeOthers)
    {
        $new = clone $this;
        $new->HandlingSurchargeOthers = $HandlingSurchargeOthers;

        return $new;
    }

    /**
     * @return float
     */
    public function getShipPrice()
    {
        return $this->ShipPrice;
    }

    /**
     * @param float $ShipPrice
     * @return ProductBaseEntity
     */
    public function withShipPrice($ShipPrice)
    {
        $new = clone $this;
        $new->ShipPrice = $ShipPrice;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiscountGridCode()
    {
        return $this->DiscountGridCode;
    }

    /**
     * @param string $DiscountGridCode
     * @return ProductBaseEntity
     */
    public function withDiscountGridCode($DiscountGridCode)
    {
        $new = clone $this;
        $new->DiscountGridCode = $DiscountGridCode;

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
     * @return ProductBaseEntity
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
    public function getCanonicalURLCustomizedContent()
    {
        return $this->CanonicalURLCustomizedContent;
    }

    /**
     * @param string $CanonicalURLCustomizedContent
     * @return ProductBaseEntity
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
    public function getMetaDescription()
    {
        return $this->MetaDescription;
    }

    /**
     * @param string $MetaDescription
     * @return ProductBaseEntity
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
    public function getMetaKeywords()
    {
        return $this->MetaKeywords;
    }

    /**
     * @param string $MetaKeywords
     * @return ProductBaseEntity
     */
    public function withMetaKeywords($MetaKeywords)
    {
        $new = clone $this;
        $new->MetaKeywords = $MetaKeywords;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice1()
    {
        return $this->Price1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price1
     * @return ProductBaseEntity
     */
    public function withPrice1($Price1)
    {
        $new = clone $this;
        $new->Price1 = $Price1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice2()
    {
        return $this->Price2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price2
     * @return ProductBaseEntity
     */
    public function withPrice2($Price2)
    {
        $new = clone $this;
        $new->Price2 = $Price2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice3()
    {
        return $this->Price3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price3
     * @return ProductBaseEntity
     */
    public function withPrice3($Price3)
    {
        $new = clone $this;
        $new->Price3 = $Price3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice4()
    {
        return $this->Price4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price4
     * @return ProductBaseEntity
     */
    public function withPrice4($Price4)
    {
        $new = clone $this;
        $new->Price4 = $Price4;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice5()
    {
        return $this->Price5;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price5
     * @return ProductBaseEntity
     */
    public function withPrice5($Price5)
    {
        $new = clone $this;
        $new->Price5 = $Price5;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice6()
    {
        return $this->Price6;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price6
     * @return ProductBaseEntity
     */
    public function withPrice6($Price6)
    {
        $new = clone $this;
        $new->Price6 = $Price6;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice7()
    {
        return $this->Price7;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price7
     * @return ProductBaseEntity
     */
    public function withPrice7($Price7)
    {
        $new = clone $this;
        $new->Price7 = $Price7;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice8()
    {
        return $this->Price8;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price8
     * @return ProductBaseEntity
     */
    public function withPrice8($Price8)
    {
        $new = clone $this;
        $new->Price8 = $Price8;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getPrice9()
    {
        return $this->Price9;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $Price9
     * @return ProductBaseEntity
     */
    public function withPrice9($Price9)
    {
        $new = clone $this;
        $new->Price9 = $Price9;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastUpdateDate()
    {
        return $this->LastUpdateDate;
    }

    /**
     * @param \DateTimeInterface $LastUpdateDate
     * @return ProductBaseEntity
     */
    public function withLastUpdateDate($LastUpdateDate)
    {
        $new = clone $this;
        $new->LastUpdateDate = $LastUpdateDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdditionalImagesWidth()
    {
        return $this->AdditionalImagesWidth;
    }

    /**
     * @param int $AdditionalImagesWidth
     * @return ProductBaseEntity
     */
    public function withAdditionalImagesWidth($AdditionalImagesWidth)
    {
        $new = clone $this;
        $new->AdditionalImagesWidth = $AdditionalImagesWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdditionalImagesHeight()
    {
        return $this->AdditionalImagesHeight;
    }

    /**
     * @param int $AdditionalImagesHeight
     * @return ProductBaseEntity
     */
    public function withAdditionalImagesHeight($AdditionalImagesHeight)
    {
        $new = clone $this;
        $new->AdditionalImagesHeight = $AdditionalImagesHeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdditionalImagesThumbnailWidth()
    {
        return $this->AdditionalImagesThumbnailWidth;
    }

    /**
     * @param int $AdditionalImagesThumbnailWidth
     * @return ProductBaseEntity
     */
    public function withAdditionalImagesThumbnailWidth($AdditionalImagesThumbnailWidth)
    {
        $new = clone $this;
        $new->AdditionalImagesThumbnailWidth = $AdditionalImagesThumbnailWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdditionalImagesThumbnailChangeMode()
    {
        return $this->AdditionalImagesThumbnailChangeMode;
    }

    /**
     * @param int $AdditionalImagesThumbnailChangeMode
     * @return ProductBaseEntity
     */
    public function withAdditionalImagesThumbnailChangeMode($AdditionalImagesThumbnailChangeMode)
    {
        $new = clone $this;
        $new->AdditionalImagesThumbnailChangeMode = $AdditionalImagesThumbnailChangeMode;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdditionalImagesZoomWidth()
    {
        return $this->AdditionalImagesZoomWidth;
    }

    /**
     * @param int $AdditionalImagesZoomWidth
     * @return ProductBaseEntity
     */
    public function withAdditionalImagesZoomWidth($AdditionalImagesZoomWidth)
    {
        $new = clone $this;
        $new->AdditionalImagesZoomWidth = $AdditionalImagesZoomWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdditionalImagesZoomHeight()
    {
        return $this->AdditionalImagesZoomHeight;
    }

    /**
     * @param int $AdditionalImagesZoomHeight
     * @return ProductBaseEntity
     */
    public function withAdditionalImagesZoomHeight($AdditionalImagesZoomHeight)
    {
        $new = clone $this;
        $new->AdditionalImagesZoomHeight = $AdditionalImagesZoomHeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getLinkedItemID()
    {
        return $this->LinkedItemID;
    }

    /**
     * @param int $LinkedItemID
     * @return ProductBaseEntity
     */
    public function withLinkedItemID($LinkedItemID)
    {
        $new = clone $this;
        $new->LinkedItemID = $LinkedItemID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLinkedItemSKU()
    {
        return $this->LinkedItemSKU;
    }

    /**
     * @param string $LinkedItemSKU
     * @return ProductBaseEntity
     */
    public function withLinkedItemSKU($LinkedItemSKU)
    {
        $new = clone $this;
        $new->LinkedItemSKU = $LinkedItemSKU;

        return $new;
    }

    /**
     * @return string
     */
    public function getLinkedItemLanguage()
    {
        return $this->LinkedItemLanguage;
    }

    /**
     * @param string $LinkedItemLanguage
     * @return ProductBaseEntity
     */
    public function withLinkedItemLanguage($LinkedItemLanguage)
    {
        $new = clone $this;
        $new->LinkedItemLanguage = $LinkedItemLanguage;

        return $new;
    }

    /**
     * @return int
     */
    public function getAdditionalImagesZoomPosition()
    {
        return $this->AdditionalImagesZoomPosition;
    }

    /**
     * @param int $AdditionalImagesZoomPosition
     * @return ProductBaseEntity
     */
    public function withAdditionalImagesZoomPosition($AdditionalImagesZoomPosition)
    {
        $new = clone $this;
        $new->AdditionalImagesZoomPosition = $AdditionalImagesZoomPosition;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrlExternalLink()
    {
        return $this->UrlExternalLink;
    }

    /**
     * @param string $UrlExternalLink
     * @return ProductBaseEntity
     */
    public function withUrlExternalLink($UrlExternalLink)
    {
        $new = clone $this;
        $new->UrlExternalLink = $UrlExternalLink;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOptionIsDefault()
    {
        return $this->OptionIsDefault;
    }

    /**
     * @param bool $OptionIsDefault
     * @return ProductBaseEntity
     */
    public function withOptionIsDefault($OptionIsDefault)
    {
        $new = clone $this;
        $new->OptionIsDefault = $OptionIsDefault;

        return $new;
    }

    /**
     * @return string
     */
    public function getEANCode()
    {
        return $this->EANCode;
    }

    /**
     * @param string $EANCode
     * @return ProductBaseEntity
     */
    public function withEANCode($EANCode)
    {
        $new = clone $this;
        $new->EANCode = $EANCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemCondition()
    {
        return $this->ItemCondition;
    }

    /**
     * @param int $ItemCondition
     * @return ProductBaseEntity
     */
    public function withItemCondition($ItemCondition)
    {
        $new = clone $this;
        $new->ItemCondition = $ItemCondition;

        return $new;
    }

    /**
     * @return int
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }

    /**
     * @param int $Guarantee
     * @return ProductBaseEntity
     */
    public function withGuarantee($Guarantee)
    {
        $new = clone $this;
        $new->Guarantee = $Guarantee;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVisible()
    {
        return $this->Visible;
    }

    /**
     * @param bool $Visible
     * @return ProductBaseEntity
     */
    public function withVisible($Visible)
    {
        $new = clone $this;
        $new->Visible = $Visible;

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
     * @return ProductBaseEntity
     */
    public function withPosition($Position)
    {
        $new = clone $this;
        $new->Position = $Position;

        return $new;
    }

    /**
     * @return string
     */
    public function getMPN()
    {
        return $this->MPN;
    }

    /**
     * @param string $MPN
     * @return ProductBaseEntity
     */
    public function withMPN($MPN)
    {
        $new = clone $this;
        $new->MPN = $MPN;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice()
    {
        return $this->StrikethroughPrice;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice($StrikethroughPrice)
    {
        $new = clone $this;
        $new->StrikethroughPrice = $StrikethroughPrice;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice1()
    {
        return $this->StrikethroughPrice1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice1
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice1($StrikethroughPrice1)
    {
        $new = clone $this;
        $new->StrikethroughPrice1 = $StrikethroughPrice1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice2()
    {
        return $this->StrikethroughPrice2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice2
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice2($StrikethroughPrice2)
    {
        $new = clone $this;
        $new->StrikethroughPrice2 = $StrikethroughPrice2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice3()
    {
        return $this->StrikethroughPrice3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice3
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice3($StrikethroughPrice3)
    {
        $new = clone $this;
        $new->StrikethroughPrice3 = $StrikethroughPrice3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice4()
    {
        return $this->StrikethroughPrice4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice4
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice4($StrikethroughPrice4)
    {
        $new = clone $this;
        $new->StrikethroughPrice4 = $StrikethroughPrice4;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice5()
    {
        return $this->StrikethroughPrice5;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice5
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice5($StrikethroughPrice5)
    {
        $new = clone $this;
        $new->StrikethroughPrice5 = $StrikethroughPrice5;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice6()
    {
        return $this->StrikethroughPrice6;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice6
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice6($StrikethroughPrice6)
    {
        $new = clone $this;
        $new->StrikethroughPrice6 = $StrikethroughPrice6;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice7()
    {
        return $this->StrikethroughPrice7;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice7
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice7($StrikethroughPrice7)
    {
        $new = clone $this;
        $new->StrikethroughPrice7 = $StrikethroughPrice7;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice8()
    {
        return $this->StrikethroughPrice8;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice8
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice8($StrikethroughPrice8)
    {
        $new = clone $this;
        $new->StrikethroughPrice8 = $StrikethroughPrice8;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity
     */
    public function getStrikethroughPrice9()
    {
        return $this->StrikethroughPrice9;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntity $StrikethroughPrice9
     * @return ProductBaseEntity
     */
    public function withStrikethroughPrice9($StrikethroughPrice9)
    {
        $new = clone $this;
        $new->StrikethroughPrice9 = $StrikethroughPrice9;

        return $new;
    }

    /**
     * @return string
     */
    public function getTaxCountryISOCode()
    {
        return $this->TaxCountryISOCode;
    }

    /**
     * @param string $TaxCountryISOCode
     * @return ProductBaseEntity
     */
    public function withTaxCountryISOCode($TaxCountryISOCode)
    {
        $new = clone $this;
        $new->TaxCountryISOCode = $TaxCountryISOCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return ProductBaseEntity
     */
    public function withCost($Cost)
    {
        $new = clone $this;
        $new->Cost = $Cost;

        return $new;
    }

    /**
     * @return float
     */
    public function getReviewRating()
    {
        return $this->ReviewRating;
    }

    /**
     * @param float $ReviewRating
     * @return ProductBaseEntity
     */
    public function withReviewRating($ReviewRating)
    {
        $new = clone $this;
        $new->ReviewRating = $ReviewRating;

        return $new;
    }

    /**
     * @return int
     */
    public function getReviewCount()
    {
        return $this->ReviewCount;
    }

    /**
     * @param int $ReviewCount
     * @return ProductBaseEntity
     */
    public function withReviewCount($ReviewCount)
    {
        $new = clone $this;
        $new->ReviewCount = $ReviewCount;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId()
    {
        return $this->DiscountRuleId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId($DiscountRuleId)
    {
        $new = clone $this;
        $new->DiscountRuleId = $DiscountRuleId;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId1()
    {
        return $this->DiscountRuleId1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId1
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId1($DiscountRuleId1)
    {
        $new = clone $this;
        $new->DiscountRuleId1 = $DiscountRuleId1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId2()
    {
        return $this->DiscountRuleId2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId2
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId2($DiscountRuleId2)
    {
        $new = clone $this;
        $new->DiscountRuleId2 = $DiscountRuleId2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId3()
    {
        return $this->DiscountRuleId3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId3
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId3($DiscountRuleId3)
    {
        $new = clone $this;
        $new->DiscountRuleId3 = $DiscountRuleId3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId4()
    {
        return $this->DiscountRuleId4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId4
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId4($DiscountRuleId4)
    {
        $new = clone $this;
        $new->DiscountRuleId4 = $DiscountRuleId4;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId5()
    {
        return $this->DiscountRuleId5;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId5
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId5($DiscountRuleId5)
    {
        $new = clone $this;
        $new->DiscountRuleId5 = $DiscountRuleId5;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId6()
    {
        return $this->DiscountRuleId6;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId6
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId6($DiscountRuleId6)
    {
        $new = clone $this;
        $new->DiscountRuleId6 = $DiscountRuleId6;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId7()
    {
        return $this->DiscountRuleId7;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId7
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId7($DiscountRuleId7)
    {
        $new = clone $this;
        $new->DiscountRuleId7 = $DiscountRuleId7;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId8()
    {
        return $this->DiscountRuleId8;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId8
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId8($DiscountRuleId8)
    {
        $new = clone $this;
        $new->DiscountRuleId8 = $DiscountRuleId8;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
     */
    public function getDiscountRuleId9()
    {
        return $this->DiscountRuleId9;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity $DiscountRuleId9
     * @return ProductBaseEntity
     */
    public function withDiscountRuleId9($DiscountRuleId9)
    {
        $new = clone $this;
        $new->DiscountRuleId9 = $DiscountRuleId9;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return ProductBaseEntity
     */
    public function withComment($Comment)
    {
        $new = clone $this;
        $new->Comment = $Comment;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemType()
    {
        return $this->ItemType;
    }

    /**
     * @param int $ItemType
     * @return ProductBaseEntity
     */
    public function withItemType($ItemType)
    {
        $new = clone $this;
        $new->ItemType = $ItemType;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateOfAvailability()
    {
        return $this->DateOfAvailability;
    }

    /**
     * @param \DateTimeInterface $DateOfAvailability
     * @return ProductBaseEntity
     */
    public function withDateOfAvailability($DateOfAvailability)
    {
        $new = clone $this;
        $new->DateOfAvailability = $DateOfAvailability;

        return $new;
    }

    /**
     * @return int
     */
    public function getHighlightType()
    {
        return $this->HighlightType;
    }

    /**
     * @param int $HighlightType
     * @return ProductBaseEntity
     */
    public function withHighlightType($HighlightType)
    {
        $new = clone $this;
        $new->HighlightType = $HighlightType;

        return $new;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param int $State
     * @return ProductBaseEntity
     */
    public function withState($State)
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory4()
    {
        return $this->Category4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category4
     * @return ProductBaseEntity
     */
    public function withCategory4($Category4)
    {
        $new = clone $this;
        $new->Category4 = $Category4;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory5()
    {
        return $this->Category5;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category5
     * @return ProductBaseEntity
     */
    public function withCategory5($Category5)
    {
        $new = clone $this;
        $new->Category5 = $Category5;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory6()
    {
        return $this->Category6;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category6
     * @return ProductBaseEntity
     */
    public function withCategory6($Category6)
    {
        $new = clone $this;
        $new->Category6 = $Category6;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory7()
    {
        return $this->Category7;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category7
     * @return ProductBaseEntity
     */
    public function withCategory7($Category7)
    {
        $new = clone $this;
        $new->Category7 = $Category7;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory8()
    {
        return $this->Category8;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category8
     * @return ProductBaseEntity
     */
    public function withCategory8($Category8)
    {
        $new = clone $this;
        $new->Category8 = $Category8;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory9()
    {
        return $this->Category9;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category9
     * @return ProductBaseEntity
     */
    public function withCategory9($Category9)
    {
        $new = clone $this;
        $new->Category9 = $Category9;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory10()
    {
        return $this->Category10;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category10
     * @return ProductBaseEntity
     */
    public function withCategory10($Category10)
    {
        $new = clone $this;
        $new->Category10 = $Category10;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param \DateTimeInterface $CreationDate
     * @return ProductBaseEntity
     */
    public function withCreationDate($CreationDate)
    {
        $new = clone $this;
        $new->CreationDate = $CreationDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasAttributes()
    {
        return $this->HasAttributes;
    }

    /**
     * @param bool $HasAttributes
     * @return ProductBaseEntity
     */
    public function withHasAttributes($HasAttributes)
    {
        $new = clone $this;
        $new->HasAttributes = $HasAttributes;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfImagesListIdEntity
     */
    public function getImagesList()
    {
        return $this->ImagesList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfImagesListIdEntity $ImagesList
     * @return ProductBaseEntity
     */
    public function withImagesList($ImagesList)
    {
        $new = clone $this;
        $new->ImagesList = $ImagesList;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfTaxAmountEntity
     */
    public function getTaxAmountList()
    {
        return $this->TaxAmountList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfTaxAmountEntity $TaxAmountList
     * @return ProductBaseEntity
     */
    public function withTaxAmountList($TaxAmountList)
    {
        $new = clone $this;
        $new->TaxAmountList = $TaxAmountList;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity
     */
    public function getTaxClass()
    {
        return $this->TaxClass;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity $TaxClass
     * @return ProductBaseEntity
     */
    public function withTaxClass($TaxClass)
    {
        $new = clone $this;
        $new->TaxClass = $TaxClass;

        return $new;
    }


}

