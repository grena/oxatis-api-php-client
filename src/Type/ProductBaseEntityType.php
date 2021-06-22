<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductBaseEntityType
 *
 *
 * XSD Type: ProductBaseEntity
 */
class ProductBaseEntityType extends ProductIdEntityType
{

    /**
     * @var int $optPropertyID
     */
    private $optPropertyID = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price
     */
    private $price = null;

    /**
     * @var float $taxRate
     */
    private $taxRate = null;

    /**
     * @var float $ecotaxTI
     */
    private $ecotaxTI = null;

    /**
     * @var string $longDescription
     */
    private $longDescription = null;

    /**
     * @var string $bigImgFileName
     */
    private $bigImgFileName = null;

    /**
     * @var string $smallImgFileName
     */
    private $smallImgFileName = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category1
     */
    private $category1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category2
     */
    private $category2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category3
     */
    private $category3 = null;

    /**
     * @var string $familyName
     */
    private $familyName = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BrandEntityType $brand
     */
    private $brand = null;

    /**
     * @var bool $showInStockNote
     */
    private $showInStockNote = null;

    /**
     * @var bool $showStockLevel
     */
    private $showStockLevel = null;

    /**
     * @var int $daysToShip
     */
    private $daysToShip = null;

    /**
     * @var bool $showIfOutOfStock
     */
    private $showIfOutOfStock = null;

    /**
     * @var bool $saleIfOutOfStock
     */
    private $saleIfOutOfStock = null;

    /**
     * @var int $saleIfOutOfStockScenario
     */
    private $saleIfOutOfStockScenario = null;

    /**
     * @var bool $showDaysToship
     */
    private $showDaysToship = null;

    /**
     * @var int $weight
     */
    private $weight = null;

    /**
     * @var int $dimensionHeight
     */
    private $dimensionHeight = null;

    /**
     * @var int $dimensionWidth
     */
    private $dimensionWidth = null;

    /**
     * @var int $dimensionLength
     */
    private $dimensionLength = null;

    /**
     * @var float $handlingSurcharge1ST
     */
    private $handlingSurcharge1ST = null;

    /**
     * @var float $handlingSurchargeOthers
     */
    private $handlingSurchargeOthers = null;

    /**
     * @var float $shipPrice
     */
    private $shipPrice = null;

    /**
     * @var string $discountGridCode
     */
    private $discountGridCode = null;

    /**
     * @var string $metaTitle
     */
    private $metaTitle = null;

    /**
     * @var string $metaDescription
     */
    private $metaDescription = null;

    /**
     * @var string $metaKeywords
     */
    private $metaKeywords = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price1
     */
    private $price1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price2
     */
    private $price2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price3
     */
    private $price3 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price4
     */
    private $price4 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price5
     */
    private $price5 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price6
     */
    private $price6 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price7
     */
    private $price7 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price8
     */
    private $price8 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price9
     */
    private $price9 = null;

    /**
     * @var \DateTime $lastUpdateDate
     */
    private $lastUpdateDate = null;

    /**
     * @var int $additionalImagesWidth
     */
    private $additionalImagesWidth = null;

    /**
     * @var int $additionalImagesHeight
     */
    private $additionalImagesHeight = null;

    /**
     * @var int $additionalImagesThumbnailWidth
     */
    private $additionalImagesThumbnailWidth = null;

    /**
     * @var int $additionalImagesThumbnailChangeMode
     */
    private $additionalImagesThumbnailChangeMode = null;

    /**
     * @var int $additionalImagesZoomWidth
     */
    private $additionalImagesZoomWidth = null;

    /**
     * @var int $additionalImagesZoomPosition
     */
    private $additionalImagesZoomPosition = null;

    /**
     * @var int $additionalImagesZoomHeight
     */
    private $additionalImagesZoomHeight = null;

    /**
     * @var int $linkedItemID
     */
    private $linkedItemID = null;

    /**
     * @var string $linkedItemSKU
     */
    private $linkedItemSKU = null;

    /**
     * @var string $linkedItemLanguage
     */
    private $linkedItemLanguage = null;

    /**
     * @var bool $linkedUpdating
     */
    private $linkedUpdating = null;

    /**
     * @var string $urlExternalLink
     */
    private $urlExternalLink = null;

    /**
     * @var bool $optionIsDefault
     */
    private $optionIsDefault = null;

    /**
     * @var string $eANCode
     */
    private $eANCode = null;

    /**
     * @var int $itemCondition
     */
    private $itemCondition = null;

    /**
     * @var int $guarantee
     */
    private $guarantee = null;

    /**
     * @var bool $visible
     */
    private $visible = null;

    /**
     * @var int $position
     */
    private $position = null;

    /**
     * @var string $mPN
     */
    private $mPN = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice
     */
    private $strikethroughPrice = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice1
     */
    private $strikethroughPrice1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice2
     */
    private $strikethroughPrice2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice3
     */
    private $strikethroughPrice3 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice4
     */
    private $strikethroughPrice4 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice5
     */
    private $strikethroughPrice5 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice6
     */
    private $strikethroughPrice6 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice7
     */
    private $strikethroughPrice7 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice8
     */
    private $strikethroughPrice8 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice9
     */
    private $strikethroughPrice9 = null;

    /**
     * @var string $canonicalURLCustomizedContent
     */
    private $canonicalURLCustomizedContent = null;

    /**
     * @var string $taxCountryISOCode
     */
    private $taxCountryISOCode = null;

    /**
     * @var float $cost
     */
    private $cost = null;

    /**
     * @var float $reviewRating
     */
    private $reviewRating = null;

    /**
     * @var int $reviewCount
     */
    private $reviewCount = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $productImagesListEntity
     */
    private $productImagesListEntity = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId
     */
    private $discountRuleId = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId1
     */
    private $discountRuleId1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId2
     */
    private $discountRuleId2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId3
     */
    private $discountRuleId3 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId4
     */
    private $discountRuleId4 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId5
     */
    private $discountRuleId5 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId6
     */
    private $discountRuleId6 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId7
     */
    private $discountRuleId7 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId8
     */
    private $discountRuleId8 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId9
     */
    private $discountRuleId9 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $imagesList
     */
    private $imagesList = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType $taxClass
     */
    private $taxClass = null;

    /**
     * Gets as optPropertyID
     *
     * @return int
     */
    public function getOptPropertyID()
    {
        return $this->optPropertyID;
    }

    /**
     * Sets a new optPropertyID
     *
     * @param int $optPropertyID
     * @return self
     */
    public function setOptPropertyID($optPropertyID)
    {
        $this->optPropertyID = $optPropertyID;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * Gets as price
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price
     * @return self
     */
    public function setPrice(PriceVATModeEntityType $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as taxRate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Sets a new taxRate
     *
     * @param float $taxRate
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Gets as ecotaxTI
     *
     * @return float
     */
    public function getEcotaxTI()
    {
        return $this->ecotaxTI;
    }

    /**
     * Sets a new ecotaxTI
     *
     * @param float $ecotaxTI
     * @return self
     */
    public function setEcotaxTI($ecotaxTI)
    {
        $this->ecotaxTI = $ecotaxTI;
        return $this;
    }

    /**
     * Gets as longDescription
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription
     *
     * @param string $longDescription
     * @return self
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * Gets as bigImgFileName
     *
     * @return string
     */
    public function getBigImgFileName()
    {
        return $this->bigImgFileName;
    }

    /**
     * Sets a new bigImgFileName
     *
     * @param string $bigImgFileName
     * @return self
     */
    public function setBigImgFileName($bigImgFileName)
    {
        $this->bigImgFileName = $bigImgFileName;
        return $this;
    }

    /**
     * Gets as smallImgFileName
     *
     * @return string
     */
    public function getSmallImgFileName()
    {
        return $this->smallImgFileName;
    }

    /**
     * Sets a new smallImgFileName
     *
     * @param string $smallImgFileName
     * @return self
     */
    public function setSmallImgFileName($smallImgFileName)
    {
        $this->smallImgFileName = $smallImgFileName;
        return $this;
    }

    /**
     * Gets as category1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory1()
    {
        return $this->category1;
    }

    /**
     * Sets a new category1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category1
     * @return self
     */
    public function setCategory1(CategoryEntityType $category1)
    {
        $this->category1 = $category1;
        return $this;
    }

    /**
     * Gets as category2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory2()
    {
        return $this->category2;
    }

    /**
     * Sets a new category2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category2
     * @return self
     */
    public function setCategory2(CategoryEntityType $category2)
    {
        $this->category2 = $category2;
        return $this;
    }

    /**
     * Gets as category3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory3()
    {
        return $this->category3;
    }

    /**
     * Sets a new category3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category3
     * @return self
     */
    public function setCategory3(CategoryEntityType $category3)
    {
        $this->category3 = $category3;
        return $this;
    }

    /**
     * Gets as familyName
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets a new familyName
     *
     * @param string $familyName
     * @return self
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * Gets as brand
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\BrandEntityType
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\BrandEntityType $brand
     * @return self
     */
    public function setBrand(BrandEntityType $brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Gets as showInStockNote
     *
     * @return bool
     */
    public function getShowInStockNote()
    {
        return $this->showInStockNote;
    }

    /**
     * Sets a new showInStockNote
     *
     * @param bool $showInStockNote
     * @return self
     */
    public function setShowInStockNote($showInStockNote)
    {
        $this->showInStockNote = $showInStockNote;
        return $this;
    }

    /**
     * Gets as showStockLevel
     *
     * @return bool
     */
    public function getShowStockLevel()
    {
        return $this->showStockLevel;
    }

    /**
     * Sets a new showStockLevel
     *
     * @param bool $showStockLevel
     * @return self
     */
    public function setShowStockLevel($showStockLevel)
    {
        $this->showStockLevel = $showStockLevel;
        return $this;
    }

    /**
     * Gets as daysToShip
     *
     * @return int
     */
    public function getDaysToShip()
    {
        return $this->daysToShip;
    }

    /**
     * Sets a new daysToShip
     *
     * @param int $daysToShip
     * @return self
     */
    public function setDaysToShip($daysToShip)
    {
        $this->daysToShip = $daysToShip;
        return $this;
    }

    /**
     * Gets as showIfOutOfStock
     *
     * @return bool
     */
    public function getShowIfOutOfStock()
    {
        return $this->showIfOutOfStock;
    }

    /**
     * Sets a new showIfOutOfStock
     *
     * @param bool $showIfOutOfStock
     * @return self
     */
    public function setShowIfOutOfStock($showIfOutOfStock)
    {
        $this->showIfOutOfStock = $showIfOutOfStock;
        return $this;
    }

    /**
     * Gets as saleIfOutOfStock
     *
     * @return bool
     */
    public function getSaleIfOutOfStock()
    {
        return $this->saleIfOutOfStock;
    }

    /**
     * Sets a new saleIfOutOfStock
     *
     * @param bool $saleIfOutOfStock
     * @return self
     */
    public function setSaleIfOutOfStock($saleIfOutOfStock)
    {
        $this->saleIfOutOfStock = $saleIfOutOfStock;
        return $this;
    }

    /**
     * Gets as saleIfOutOfStockScenario
     *
     * @return int
     */
    public function getSaleIfOutOfStockScenario()
    {
        return $this->saleIfOutOfStockScenario;
    }

    /**
     * Sets a new saleIfOutOfStockScenario
     *
     * @param int $saleIfOutOfStockScenario
     * @return self
     */
    public function setSaleIfOutOfStockScenario($saleIfOutOfStockScenario)
    {
        $this->saleIfOutOfStockScenario = $saleIfOutOfStockScenario;
        return $this;
    }

    /**
     * Gets as showDaysToship
     *
     * @return bool
     */
    public function getShowDaysToship()
    {
        return $this->showDaysToship;
    }

    /**
     * Sets a new showDaysToship
     *
     * @param bool $showDaysToship
     * @return self
     */
    public function setShowDaysToship($showDaysToship)
    {
        $this->showDaysToship = $showDaysToship;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as dimensionHeight
     *
     * @return int
     */
    public function getDimensionHeight()
    {
        return $this->dimensionHeight;
    }

    /**
     * Sets a new dimensionHeight
     *
     * @param int $dimensionHeight
     * @return self
     */
    public function setDimensionHeight($dimensionHeight)
    {
        $this->dimensionHeight = $dimensionHeight;
        return $this;
    }

    /**
     * Gets as dimensionWidth
     *
     * @return int
     */
    public function getDimensionWidth()
    {
        return $this->dimensionWidth;
    }

    /**
     * Sets a new dimensionWidth
     *
     * @param int $dimensionWidth
     * @return self
     */
    public function setDimensionWidth($dimensionWidth)
    {
        $this->dimensionWidth = $dimensionWidth;
        return $this;
    }

    /**
     * Gets as dimensionLength
     *
     * @return int
     */
    public function getDimensionLength()
    {
        return $this->dimensionLength;
    }

    /**
     * Sets a new dimensionLength
     *
     * @param int $dimensionLength
     * @return self
     */
    public function setDimensionLength($dimensionLength)
    {
        $this->dimensionLength = $dimensionLength;
        return $this;
    }

    /**
     * Gets as handlingSurcharge1ST
     *
     * @return float
     */
    public function getHandlingSurcharge1ST()
    {
        return $this->handlingSurcharge1ST;
    }

    /**
     * Sets a new handlingSurcharge1ST
     *
     * @param float $handlingSurcharge1ST
     * @return self
     */
    public function setHandlingSurcharge1ST($handlingSurcharge1ST)
    {
        $this->handlingSurcharge1ST = $handlingSurcharge1ST;
        return $this;
    }

    /**
     * Gets as handlingSurchargeOthers
     *
     * @return float
     */
    public function getHandlingSurchargeOthers()
    {
        return $this->handlingSurchargeOthers;
    }

    /**
     * Sets a new handlingSurchargeOthers
     *
     * @param float $handlingSurchargeOthers
     * @return self
     */
    public function setHandlingSurchargeOthers($handlingSurchargeOthers)
    {
        $this->handlingSurchargeOthers = $handlingSurchargeOthers;
        return $this;
    }

    /**
     * Gets as shipPrice
     *
     * @return float
     */
    public function getShipPrice()
    {
        return $this->shipPrice;
    }

    /**
     * Sets a new shipPrice
     *
     * @param float $shipPrice
     * @return self
     */
    public function setShipPrice($shipPrice)
    {
        $this->shipPrice = $shipPrice;
        return $this;
    }

    /**
     * Gets as discountGridCode
     *
     * @return string
     */
    public function getDiscountGridCode()
    {
        return $this->discountGridCode;
    }

    /**
     * Sets a new discountGridCode
     *
     * @param string $discountGridCode
     * @return self
     */
    public function setDiscountGridCode($discountGridCode)
    {
        $this->discountGridCode = $discountGridCode;
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
     * Gets as price1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice1()
    {
        return $this->price1;
    }

    /**
     * Sets a new price1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price1
     * @return self
     */
    public function setPrice1(PriceVATModeEntityType $price1)
    {
        $this->price1 = $price1;
        return $this;
    }

    /**
     * Gets as price2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice2()
    {
        return $this->price2;
    }

    /**
     * Sets a new price2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price2
     * @return self
     */
    public function setPrice2(PriceVATModeEntityType $price2)
    {
        $this->price2 = $price2;
        return $this;
    }

    /**
     * Gets as price3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice3()
    {
        return $this->price3;
    }

    /**
     * Sets a new price3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price3
     * @return self
     */
    public function setPrice3(PriceVATModeEntityType $price3)
    {
        $this->price3 = $price3;
        return $this;
    }

    /**
     * Gets as price4
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice4()
    {
        return $this->price4;
    }

    /**
     * Sets a new price4
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price4
     * @return self
     */
    public function setPrice4(PriceVATModeEntityType $price4)
    {
        $this->price4 = $price4;
        return $this;
    }

    /**
     * Gets as price5
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice5()
    {
        return $this->price5;
    }

    /**
     * Sets a new price5
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price5
     * @return self
     */
    public function setPrice5(PriceVATModeEntityType $price5)
    {
        $this->price5 = $price5;
        return $this;
    }

    /**
     * Gets as price6
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice6()
    {
        return $this->price6;
    }

    /**
     * Sets a new price6
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price6
     * @return self
     */
    public function setPrice6(PriceVATModeEntityType $price6)
    {
        $this->price6 = $price6;
        return $this;
    }

    /**
     * Gets as price7
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice7()
    {
        return $this->price7;
    }

    /**
     * Sets a new price7
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price7
     * @return self
     */
    public function setPrice7(PriceVATModeEntityType $price7)
    {
        $this->price7 = $price7;
        return $this;
    }

    /**
     * Gets as price8
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice8()
    {
        return $this->price8;
    }

    /**
     * Sets a new price8
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price8
     * @return self
     */
    public function setPrice8(PriceVATModeEntityType $price8)
    {
        $this->price8 = $price8;
        return $this;
    }

    /**
     * Gets as price9
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getPrice9()
    {
        return $this->price9;
    }

    /**
     * Sets a new price9
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $price9
     * @return self
     */
    public function setPrice9(PriceVATModeEntityType $price9)
    {
        $this->price9 = $price9;
        return $this;
    }

    /**
     * Gets as lastUpdateDate
     *
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }

    /**
     * Sets a new lastUpdateDate
     *
     * @param \DateTime $lastUpdateDate
     * @return self
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate = null)
    {
        $this->lastUpdateDate = $lastUpdateDate;
        return $this;
    }

    /**
     * Gets as additionalImagesWidth
     *
     * @return int
     */
    public function getAdditionalImagesWidth()
    {
        return $this->additionalImagesWidth;
    }

    /**
     * Sets a new additionalImagesWidth
     *
     * @param int $additionalImagesWidth
     * @return self
     */
    public function setAdditionalImagesWidth($additionalImagesWidth)
    {
        $this->additionalImagesWidth = $additionalImagesWidth;
        return $this;
    }

    /**
     * Gets as additionalImagesHeight
     *
     * @return int
     */
    public function getAdditionalImagesHeight()
    {
        return $this->additionalImagesHeight;
    }

    /**
     * Sets a new additionalImagesHeight
     *
     * @param int $additionalImagesHeight
     * @return self
     */
    public function setAdditionalImagesHeight($additionalImagesHeight)
    {
        $this->additionalImagesHeight = $additionalImagesHeight;
        return $this;
    }

    /**
     * Gets as additionalImagesThumbnailWidth
     *
     * @return int
     */
    public function getAdditionalImagesThumbnailWidth()
    {
        return $this->additionalImagesThumbnailWidth;
    }

    /**
     * Sets a new additionalImagesThumbnailWidth
     *
     * @param int $additionalImagesThumbnailWidth
     * @return self
     */
    public function setAdditionalImagesThumbnailWidth($additionalImagesThumbnailWidth)
    {
        $this->additionalImagesThumbnailWidth = $additionalImagesThumbnailWidth;
        return $this;
    }

    /**
     * Gets as additionalImagesThumbnailChangeMode
     *
     * @return int
     */
    public function getAdditionalImagesThumbnailChangeMode()
    {
        return $this->additionalImagesThumbnailChangeMode;
    }

    /**
     * Sets a new additionalImagesThumbnailChangeMode
     *
     * @param int $additionalImagesThumbnailChangeMode
     * @return self
     */
    public function setAdditionalImagesThumbnailChangeMode($additionalImagesThumbnailChangeMode)
    {
        $this->additionalImagesThumbnailChangeMode = $additionalImagesThumbnailChangeMode;
        return $this;
    }

    /**
     * Gets as additionalImagesZoomWidth
     *
     * @return int
     */
    public function getAdditionalImagesZoomWidth()
    {
        return $this->additionalImagesZoomWidth;
    }

    /**
     * Sets a new additionalImagesZoomWidth
     *
     * @param int $additionalImagesZoomWidth
     * @return self
     */
    public function setAdditionalImagesZoomWidth($additionalImagesZoomWidth)
    {
        $this->additionalImagesZoomWidth = $additionalImagesZoomWidth;
        return $this;
    }

    /**
     * Gets as additionalImagesZoomPosition
     *
     * @return int
     */
    public function getAdditionalImagesZoomPosition()
    {
        return $this->additionalImagesZoomPosition;
    }

    /**
     * Sets a new additionalImagesZoomPosition
     *
     * @param int $additionalImagesZoomPosition
     * @return self
     */
    public function setAdditionalImagesZoomPosition($additionalImagesZoomPosition)
    {
        $this->additionalImagesZoomPosition = $additionalImagesZoomPosition;
        return $this;
    }

    /**
     * Gets as additionalImagesZoomHeight
     *
     * @return int
     */
    public function getAdditionalImagesZoomHeight()
    {
        return $this->additionalImagesZoomHeight;
    }

    /**
     * Sets a new additionalImagesZoomHeight
     *
     * @param int $additionalImagesZoomHeight
     * @return self
     */
    public function setAdditionalImagesZoomHeight($additionalImagesZoomHeight)
    {
        $this->additionalImagesZoomHeight = $additionalImagesZoomHeight;
        return $this;
    }

    /**
     * Gets as linkedItemID
     *
     * @return int
     */
    public function getLinkedItemID()
    {
        return $this->linkedItemID;
    }

    /**
     * Sets a new linkedItemID
     *
     * @param int $linkedItemID
     * @return self
     */
    public function setLinkedItemID($linkedItemID)
    {
        $this->linkedItemID = $linkedItemID;
        return $this;
    }

    /**
     * Gets as linkedItemSKU
     *
     * @return string
     */
    public function getLinkedItemSKU()
    {
        return $this->linkedItemSKU;
    }

    /**
     * Sets a new linkedItemSKU
     *
     * @param string $linkedItemSKU
     * @return self
     */
    public function setLinkedItemSKU($linkedItemSKU)
    {
        $this->linkedItemSKU = $linkedItemSKU;
        return $this;
    }

    /**
     * Gets as linkedItemLanguage
     *
     * @return string
     */
    public function getLinkedItemLanguage()
    {
        return $this->linkedItemLanguage;
    }

    /**
     * Sets a new linkedItemLanguage
     *
     * @param string $linkedItemLanguage
     * @return self
     */
    public function setLinkedItemLanguage($linkedItemLanguage)
    {
        $this->linkedItemLanguage = $linkedItemLanguage;
        return $this;
    }

    /**
     * Gets as linkedUpdating
     *
     * @return bool
     */
    public function getLinkedUpdating()
    {
        return $this->linkedUpdating;
    }

    /**
     * Sets a new linkedUpdating
     *
     * @param bool $linkedUpdating
     * @return self
     */
    public function setLinkedUpdating($linkedUpdating)
    {
        $this->linkedUpdating = $linkedUpdating;
        return $this;
    }

    /**
     * Gets as urlExternalLink
     *
     * @return string
     */
    public function getUrlExternalLink()
    {
        return $this->urlExternalLink;
    }

    /**
     * Sets a new urlExternalLink
     *
     * @param string $urlExternalLink
     * @return self
     */
    public function setUrlExternalLink($urlExternalLink)
    {
        $this->urlExternalLink = $urlExternalLink;
        return $this;
    }

    /**
     * Gets as optionIsDefault
     *
     * @return bool
     */
    public function getOptionIsDefault()
    {
        return $this->optionIsDefault;
    }

    /**
     * Sets a new optionIsDefault
     *
     * @param bool $optionIsDefault
     * @return self
     */
    public function setOptionIsDefault($optionIsDefault)
    {
        $this->optionIsDefault = $optionIsDefault;
        return $this;
    }

    /**
     * Gets as eANCode
     *
     * @return string
     */
    public function getEANCode()
    {
        return $this->eANCode;
    }

    /**
     * Sets a new eANCode
     *
     * @param string $eANCode
     * @return self
     */
    public function setEANCode($eANCode)
    {
        $this->eANCode = $eANCode;
        return $this;
    }

    /**
     * Gets as itemCondition
     *
     * @return int
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * Sets a new itemCondition
     *
     * @param int $itemCondition
     * @return self
     */
    public function setItemCondition($itemCondition)
    {
        $this->itemCondition = $itemCondition;
        return $this;
    }

    /**
     * Gets as guarantee
     *
     * @return int
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * @param int $guarantee
     * @return self
     */
    public function setGuarantee($guarantee)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Gets as visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Sets a new visible
     *
     * @param bool $visible
     * @return self
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
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
     * Gets as mPN
     *
     * @return string
     */
    public function getMPN()
    {
        return $this->mPN;
    }

    /**
     * Sets a new mPN
     *
     * @param string $mPN
     * @return self
     */
    public function setMPN($mPN)
    {
        $this->mPN = $mPN;
        return $this;
    }

    /**
     * Gets as strikethroughPrice
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice()
    {
        return $this->strikethroughPrice;
    }

    /**
     * Sets a new strikethroughPrice
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice
     * @return self
     */
    public function setStrikethroughPrice(PriceVATModeEntityType $strikethroughPrice)
    {
        $this->strikethroughPrice = $strikethroughPrice;
        return $this;
    }

    /**
     * Gets as strikethroughPrice1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice1()
    {
        return $this->strikethroughPrice1;
    }

    /**
     * Sets a new strikethroughPrice1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice1
     * @return self
     */
    public function setStrikethroughPrice1(PriceVATModeEntityType $strikethroughPrice1)
    {
        $this->strikethroughPrice1 = $strikethroughPrice1;
        return $this;
    }

    /**
     * Gets as strikethroughPrice2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice2()
    {
        return $this->strikethroughPrice2;
    }

    /**
     * Sets a new strikethroughPrice2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice2
     * @return self
     */
    public function setStrikethroughPrice2(PriceVATModeEntityType $strikethroughPrice2)
    {
        $this->strikethroughPrice2 = $strikethroughPrice2;
        return $this;
    }

    /**
     * Gets as strikethroughPrice3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice3()
    {
        return $this->strikethroughPrice3;
    }

    /**
     * Sets a new strikethroughPrice3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice3
     * @return self
     */
    public function setStrikethroughPrice3(PriceVATModeEntityType $strikethroughPrice3)
    {
        $this->strikethroughPrice3 = $strikethroughPrice3;
        return $this;
    }

    /**
     * Gets as strikethroughPrice4
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice4()
    {
        return $this->strikethroughPrice4;
    }

    /**
     * Sets a new strikethroughPrice4
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice4
     * @return self
     */
    public function setStrikethroughPrice4(PriceVATModeEntityType $strikethroughPrice4)
    {
        $this->strikethroughPrice4 = $strikethroughPrice4;
        return $this;
    }

    /**
     * Gets as strikethroughPrice5
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice5()
    {
        return $this->strikethroughPrice5;
    }

    /**
     * Sets a new strikethroughPrice5
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice5
     * @return self
     */
    public function setStrikethroughPrice5(PriceVATModeEntityType $strikethroughPrice5)
    {
        $this->strikethroughPrice5 = $strikethroughPrice5;
        return $this;
    }

    /**
     * Gets as strikethroughPrice6
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice6()
    {
        return $this->strikethroughPrice6;
    }

    /**
     * Sets a new strikethroughPrice6
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice6
     * @return self
     */
    public function setStrikethroughPrice6(PriceVATModeEntityType $strikethroughPrice6)
    {
        $this->strikethroughPrice6 = $strikethroughPrice6;
        return $this;
    }

    /**
     * Gets as strikethroughPrice7
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice7()
    {
        return $this->strikethroughPrice7;
    }

    /**
     * Sets a new strikethroughPrice7
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice7
     * @return self
     */
    public function setStrikethroughPrice7(PriceVATModeEntityType $strikethroughPrice7)
    {
        $this->strikethroughPrice7 = $strikethroughPrice7;
        return $this;
    }

    /**
     * Gets as strikethroughPrice8
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice8()
    {
        return $this->strikethroughPrice8;
    }

    /**
     * Sets a new strikethroughPrice8
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice8
     * @return self
     */
    public function setStrikethroughPrice8(PriceVATModeEntityType $strikethroughPrice8)
    {
        $this->strikethroughPrice8 = $strikethroughPrice8;
        return $this;
    }

    /**
     * Gets as strikethroughPrice9
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType
     */
    public function getStrikethroughPrice9()
    {
        return $this->strikethroughPrice9;
    }

    /**
     * Sets a new strikethroughPrice9
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PriceVATModeEntityType $strikethroughPrice9
     * @return self
     */
    public function setStrikethroughPrice9(PriceVATModeEntityType $strikethroughPrice9)
    {
        $this->strikethroughPrice9 = $strikethroughPrice9;
        return $this;
    }

    /**
     * Gets as canonicalURLCustomizedContent
     *
     * @return string
     */
    public function getCanonicalURLCustomizedContent()
    {
        return $this->canonicalURLCustomizedContent;
    }

    /**
     * Sets a new canonicalURLCustomizedContent
     *
     * @param string $canonicalURLCustomizedContent
     * @return self
     */
    public function setCanonicalURLCustomizedContent($canonicalURLCustomizedContent)
    {
        $this->canonicalURLCustomizedContent = $canonicalURLCustomizedContent;
        return $this;
    }

    /**
     * Gets as taxCountryISOCode
     *
     * @return string
     */
    public function getTaxCountryISOCode()
    {
        return $this->taxCountryISOCode;
    }

    /**
     * Sets a new taxCountryISOCode
     *
     * @param string $taxCountryISOCode
     * @return self
     */
    public function setTaxCountryISOCode($taxCountryISOCode)
    {
        $this->taxCountryISOCode = $taxCountryISOCode;
        return $this;
    }

    /**
     * Gets as cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost
     *
     * @param float $cost
     * @return self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Gets as reviewRating
     *
     * @return float
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * Sets a new reviewRating
     *
     * @param float $reviewRating
     * @return self
     */
    public function setReviewRating($reviewRating)
    {
        $this->reviewRating = $reviewRating;
        return $this;
    }

    /**
     * Gets as reviewCount
     *
     * @return int
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * Sets a new reviewCount
     *
     * @param int $reviewCount
     * @return self
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

    /**
     * Adds as imagesListIdEntity
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType $imagesListIdEntity
     */
    public function addToProductImagesListEntity(ImagesListIdEntityType $imagesListIdEntity)
    {
        $this->productImagesListEntity[] = $imagesListIdEntity;
        return $this;
    }

    /**
     * isset productImagesListEntity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductImagesListEntity($index)
    {
        return isset($this->productImagesListEntity[$index]);
    }

    /**
     * unset productImagesListEntity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductImagesListEntity($index)
    {
        unset($this->productImagesListEntity[$index]);
    }

    /**
     * Gets as productImagesListEntity
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[]
     */
    public function getProductImagesListEntity()
    {
        return $this->productImagesListEntity;
    }

    /**
     * Sets a new productImagesListEntity
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $productImagesListEntity
     * @return self
     */
    public function setProductImagesListEntity(array $productImagesListEntity)
    {
        $this->productImagesListEntity = $productImagesListEntity;
        return $this;
    }

    /**
     * Gets as discountRuleId
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId()
    {
        return $this->discountRuleId;
    }

    /**
     * Sets a new discountRuleId
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId
     * @return self
     */
    public function setDiscountRuleId(DiscountRuleIdEntityType $discountRuleId)
    {
        $this->discountRuleId = $discountRuleId;
        return $this;
    }

    /**
     * Gets as discountRuleId1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId1()
    {
        return $this->discountRuleId1;
    }

    /**
     * Sets a new discountRuleId1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId1
     * @return self
     */
    public function setDiscountRuleId1(DiscountRuleIdEntityType $discountRuleId1)
    {
        $this->discountRuleId1 = $discountRuleId1;
        return $this;
    }

    /**
     * Gets as discountRuleId2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId2()
    {
        return $this->discountRuleId2;
    }

    /**
     * Sets a new discountRuleId2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId2
     * @return self
     */
    public function setDiscountRuleId2(DiscountRuleIdEntityType $discountRuleId2)
    {
        $this->discountRuleId2 = $discountRuleId2;
        return $this;
    }

    /**
     * Gets as discountRuleId3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId3()
    {
        return $this->discountRuleId3;
    }

    /**
     * Sets a new discountRuleId3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId3
     * @return self
     */
    public function setDiscountRuleId3(DiscountRuleIdEntityType $discountRuleId3)
    {
        $this->discountRuleId3 = $discountRuleId3;
        return $this;
    }

    /**
     * Gets as discountRuleId4
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId4()
    {
        return $this->discountRuleId4;
    }

    /**
     * Sets a new discountRuleId4
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId4
     * @return self
     */
    public function setDiscountRuleId4(DiscountRuleIdEntityType $discountRuleId4)
    {
        $this->discountRuleId4 = $discountRuleId4;
        return $this;
    }

    /**
     * Gets as discountRuleId5
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId5()
    {
        return $this->discountRuleId5;
    }

    /**
     * Sets a new discountRuleId5
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId5
     * @return self
     */
    public function setDiscountRuleId5(DiscountRuleIdEntityType $discountRuleId5)
    {
        $this->discountRuleId5 = $discountRuleId5;
        return $this;
    }

    /**
     * Gets as discountRuleId6
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId6()
    {
        return $this->discountRuleId6;
    }

    /**
     * Sets a new discountRuleId6
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId6
     * @return self
     */
    public function setDiscountRuleId6(DiscountRuleIdEntityType $discountRuleId6)
    {
        $this->discountRuleId6 = $discountRuleId6;
        return $this;
    }

    /**
     * Gets as discountRuleId7
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId7()
    {
        return $this->discountRuleId7;
    }

    /**
     * Sets a new discountRuleId7
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId7
     * @return self
     */
    public function setDiscountRuleId7(DiscountRuleIdEntityType $discountRuleId7)
    {
        $this->discountRuleId7 = $discountRuleId7;
        return $this;
    }

    /**
     * Gets as discountRuleId8
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId8()
    {
        return $this->discountRuleId8;
    }

    /**
     * Sets a new discountRuleId8
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId8
     * @return self
     */
    public function setDiscountRuleId8(DiscountRuleIdEntityType $discountRuleId8)
    {
        $this->discountRuleId8 = $discountRuleId8;
        return $this;
    }

    /**
     * Gets as discountRuleId9
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType
     */
    public function getDiscountRuleId9()
    {
        return $this->discountRuleId9;
    }

    /**
     * Sets a new discountRuleId9
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntityType $discountRuleId9
     * @return self
     */
    public function setDiscountRuleId9(DiscountRuleIdEntityType $discountRuleId9)
    {
        $this->discountRuleId9 = $discountRuleId9;
        return $this;
    }

    /**
     * Adds as imageList
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType $imageList
     */
    public function addToImagesList(ImagesListIdEntityType $imageList)
    {
        $this->imagesList[] = $imageList;
        return $this;
    }

    /**
     * isset imagesList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImagesList($index)
    {
        return isset($this->imagesList[$index]);
    }

    /**
     * unset imagesList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImagesList($index)
    {
        unset($this->imagesList[$index]);
    }

    /**
     * Gets as imagesList
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[]
     */
    public function getImagesList()
    {
        return $this->imagesList;
    }

    /**
     * Sets a new imagesList
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $imagesList
     * @return self
     */
    public function setImagesList(array $imagesList)
    {
        $this->imagesList = $imagesList;
        return $this;
    }

    /**
     * Gets as taxClass
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType
     */
    public function getTaxClass()
    {
        return $this->taxClass;
    }

    /**
     * Sets a new taxClass
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType $taxClass
     * @return self
     */
    public function setTaxClass(TaxClassEntityType $taxClass)
    {
        $this->taxClass = $taxClass;
        return $this;
    }


}

