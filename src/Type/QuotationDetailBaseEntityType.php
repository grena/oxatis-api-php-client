<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuotationDetailBaseEntityType
 *
 *
 * XSD Type: QuotationDetailBaseEntity
 */
class QuotationDetailBaseEntityType extends OxatisEntityType
{

    /**
     * @var int $pdtOptID
     */
    private $pdtOptID = null;

    /**
     * @var int $itemOxID
     */
    private $itemOxID = null;

    /**
     * @var string $itemSKU
     */
    private $itemSKU = null;

    /**
     * @var string $itemSKUOriginal
     */
    private $itemSKUOriginal = null;

    /**
     * @var string $itemName
     */
    private $itemName = null;

    /**
     * @var float $grossPrice
     */
    private $grossPrice = null;

    /**
     * @var float $grossAmount
     */
    private $grossAmount = null;

    /**
     * @var float $taxRate
     */
    private $taxRate = null;

    /**
     * @var float $discountRate
     */
    private $discountRate = null;

    /**
     * @var float $netPrice
     */
    private $netPrice = null;

    /**
     * @var float $netAmount
     */
    private $netAmount = null;

    /**
     * @var float $vATAmount
     */
    private $vATAmount = null;

    /**
     * @var float $ecoTaxValueTaxIncl
     */
    private $ecoTaxValueTaxIncl = null;

    /**
     * @var string $discountCoupon
     */
    private $discountCoupon = null;

    /**
     * @var string $attribute1Name
     */
    private $attribute1Name = null;

    /**
     * @var string $attribute1Value
     */
    private $attribute1Value = null;

    /**
     * @var string $attribute2Name
     */
    private $attribute2Name = null;

    /**
     * @var string $attribute2Value
     */
    private $attribute2Value = null;

    /**
     * @var string $attributeTextName
     */
    private $attributeTextName = null;

    /**
     * @var string $attributeTextValue
     */
    private $attributeTextValue = null;

    /**
     * @var string $itemMainImageUrl
     */
    private $itemMainImageUrl = null;

    /**
     * @var string $itemThumbnailImageUrl
     */
    private $itemThumbnailImageUrl = null;

    /**
     * @var string $option1Name
     */
    private $option1Name = null;

    /**
     * @var string $option1Value
     */
    private $option1Value = null;

    /**
     * @var string $option2Name
     */
    private $option2Name = null;

    /**
     * @var string $option2Value
     */
    private $option2Value = null;

    /**
     * @var string $option3Name
     */
    private $option3Name = null;

    /**
     * @var string $option3Value
     */
    private $option3Value = null;

    /**
     * @var bool $offered
     */
    private $offered = null;

    /**
     * @var string $packagingName
     */
    private $packagingName = null;

    /**
     * @var int $linkedTo
     */
    private $linkedTo = null;

    /**
     * Gets as pdtOptID
     *
     * @return int
     */
    public function getPdtOptID()
    {
        return $this->pdtOptID;
    }

    /**
     * Sets a new pdtOptID
     *
     * @param int $pdtOptID
     * @return self
     */
    public function setPdtOptID($pdtOptID)
    {
        $this->pdtOptID = $pdtOptID;
        return $this;
    }

    /**
     * Gets as itemOxID
     *
     * @return int
     */
    public function getItemOxID()
    {
        return $this->itemOxID;
    }

    /**
     * Sets a new itemOxID
     *
     * @param int $itemOxID
     * @return self
     */
    public function setItemOxID($itemOxID)
    {
        $this->itemOxID = $itemOxID;
        return $this;
    }

    /**
     * Gets as itemSKU
     *
     * @return string
     */
    public function getItemSKU()
    {
        return $this->itemSKU;
    }

    /**
     * Sets a new itemSKU
     *
     * @param string $itemSKU
     * @return self
     */
    public function setItemSKU($itemSKU)
    {
        $this->itemSKU = $itemSKU;
        return $this;
    }

    /**
     * Gets as itemSKUOriginal
     *
     * @return string
     */
    public function getItemSKUOriginal()
    {
        return $this->itemSKUOriginal;
    }

    /**
     * Sets a new itemSKUOriginal
     *
     * @param string $itemSKUOriginal
     * @return self
     */
    public function setItemSKUOriginal($itemSKUOriginal)
    {
        $this->itemSKUOriginal = $itemSKUOriginal;
        return $this;
    }

    /**
     * Gets as itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Sets a new itemName
     *
     * @param string $itemName
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * Gets as grossPrice
     *
     * @return float
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * Sets a new grossPrice
     *
     * @param float $grossPrice
     * @return self
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = $grossPrice;
        return $this;
    }

    /**
     * Gets as grossAmount
     *
     * @return float
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * Sets a new grossAmount
     *
     * @param float $grossAmount
     * @return self
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
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
     * Gets as discountRate
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Sets a new discountRate
     *
     * @param float $discountRate
     * @return self
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;
        return $this;
    }

    /**
     * Gets as netPrice
     *
     * @return float
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * Sets a new netPrice
     *
     * @param float $netPrice
     * @return self
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
        return $this;
    }

    /**
     * Gets as netAmount
     *
     * @return float
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * Sets a new netAmount
     *
     * @param float $netAmount
     * @return self
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * Gets as vATAmount
     *
     * @return float
     */
    public function getVATAmount()
    {
        return $this->vATAmount;
    }

    /**
     * Sets a new vATAmount
     *
     * @param float $vATAmount
     * @return self
     */
    public function setVATAmount($vATAmount)
    {
        $this->vATAmount = $vATAmount;
        return $this;
    }

    /**
     * Gets as ecoTaxValueTaxIncl
     *
     * @return float
     */
    public function getEcoTaxValueTaxIncl()
    {
        return $this->ecoTaxValueTaxIncl;
    }

    /**
     * Sets a new ecoTaxValueTaxIncl
     *
     * @param float $ecoTaxValueTaxIncl
     * @return self
     */
    public function setEcoTaxValueTaxIncl($ecoTaxValueTaxIncl)
    {
        $this->ecoTaxValueTaxIncl = $ecoTaxValueTaxIncl;
        return $this;
    }

    /**
     * Gets as discountCoupon
     *
     * @return string
     */
    public function getDiscountCoupon()
    {
        return $this->discountCoupon;
    }

    /**
     * Sets a new discountCoupon
     *
     * @param string $discountCoupon
     * @return self
     */
    public function setDiscountCoupon($discountCoupon)
    {
        $this->discountCoupon = $discountCoupon;
        return $this;
    }

    /**
     * Gets as attribute1Name
     *
     * @return string
     */
    public function getAttribute1Name()
    {
        return $this->attribute1Name;
    }

    /**
     * Sets a new attribute1Name
     *
     * @param string $attribute1Name
     * @return self
     */
    public function setAttribute1Name($attribute1Name)
    {
        $this->attribute1Name = $attribute1Name;
        return $this;
    }

    /**
     * Gets as attribute1Value
     *
     * @return string
     */
    public function getAttribute1Value()
    {
        return $this->attribute1Value;
    }

    /**
     * Sets a new attribute1Value
     *
     * @param string $attribute1Value
     * @return self
     */
    public function setAttribute1Value($attribute1Value)
    {
        $this->attribute1Value = $attribute1Value;
        return $this;
    }

    /**
     * Gets as attribute2Name
     *
     * @return string
     */
    public function getAttribute2Name()
    {
        return $this->attribute2Name;
    }

    /**
     * Sets a new attribute2Name
     *
     * @param string $attribute2Name
     * @return self
     */
    public function setAttribute2Name($attribute2Name)
    {
        $this->attribute2Name = $attribute2Name;
        return $this;
    }

    /**
     * Gets as attribute2Value
     *
     * @return string
     */
    public function getAttribute2Value()
    {
        return $this->attribute2Value;
    }

    /**
     * Sets a new attribute2Value
     *
     * @param string $attribute2Value
     * @return self
     */
    public function setAttribute2Value($attribute2Value)
    {
        $this->attribute2Value = $attribute2Value;
        return $this;
    }

    /**
     * Gets as attributeTextName
     *
     * @return string
     */
    public function getAttributeTextName()
    {
        return $this->attributeTextName;
    }

    /**
     * Sets a new attributeTextName
     *
     * @param string $attributeTextName
     * @return self
     */
    public function setAttributeTextName($attributeTextName)
    {
        $this->attributeTextName = $attributeTextName;
        return $this;
    }

    /**
     * Gets as attributeTextValue
     *
     * @return string
     */
    public function getAttributeTextValue()
    {
        return $this->attributeTextValue;
    }

    /**
     * Sets a new attributeTextValue
     *
     * @param string $attributeTextValue
     * @return self
     */
    public function setAttributeTextValue($attributeTextValue)
    {
        $this->attributeTextValue = $attributeTextValue;
        return $this;
    }

    /**
     * Gets as itemMainImageUrl
     *
     * @return string
     */
    public function getItemMainImageUrl()
    {
        return $this->itemMainImageUrl;
    }

    /**
     * Sets a new itemMainImageUrl
     *
     * @param string $itemMainImageUrl
     * @return self
     */
    public function setItemMainImageUrl($itemMainImageUrl)
    {
        $this->itemMainImageUrl = $itemMainImageUrl;
        return $this;
    }

    /**
     * Gets as itemThumbnailImageUrl
     *
     * @return string
     */
    public function getItemThumbnailImageUrl()
    {
        return $this->itemThumbnailImageUrl;
    }

    /**
     * Sets a new itemThumbnailImageUrl
     *
     * @param string $itemThumbnailImageUrl
     * @return self
     */
    public function setItemThumbnailImageUrl($itemThumbnailImageUrl)
    {
        $this->itemThumbnailImageUrl = $itemThumbnailImageUrl;
        return $this;
    }

    /**
     * Gets as option1Name
     *
     * @return string
     */
    public function getOption1Name()
    {
        return $this->option1Name;
    }

    /**
     * Sets a new option1Name
     *
     * @param string $option1Name
     * @return self
     */
    public function setOption1Name($option1Name)
    {
        $this->option1Name = $option1Name;
        return $this;
    }

    /**
     * Gets as option1Value
     *
     * @return string
     */
    public function getOption1Value()
    {
        return $this->option1Value;
    }

    /**
     * Sets a new option1Value
     *
     * @param string $option1Value
     * @return self
     */
    public function setOption1Value($option1Value)
    {
        $this->option1Value = $option1Value;
        return $this;
    }

    /**
     * Gets as option2Name
     *
     * @return string
     */
    public function getOption2Name()
    {
        return $this->option2Name;
    }

    /**
     * Sets a new option2Name
     *
     * @param string $option2Name
     * @return self
     */
    public function setOption2Name($option2Name)
    {
        $this->option2Name = $option2Name;
        return $this;
    }

    /**
     * Gets as option2Value
     *
     * @return string
     */
    public function getOption2Value()
    {
        return $this->option2Value;
    }

    /**
     * Sets a new option2Value
     *
     * @param string $option2Value
     * @return self
     */
    public function setOption2Value($option2Value)
    {
        $this->option2Value = $option2Value;
        return $this;
    }

    /**
     * Gets as option3Name
     *
     * @return string
     */
    public function getOption3Name()
    {
        return $this->option3Name;
    }

    /**
     * Sets a new option3Name
     *
     * @param string $option3Name
     * @return self
     */
    public function setOption3Name($option3Name)
    {
        $this->option3Name = $option3Name;
        return $this;
    }

    /**
     * Gets as option3Value
     *
     * @return string
     */
    public function getOption3Value()
    {
        return $this->option3Value;
    }

    /**
     * Sets a new option3Value
     *
     * @param string $option3Value
     * @return self
     */
    public function setOption3Value($option3Value)
    {
        $this->option3Value = $option3Value;
        return $this;
    }

    /**
     * Gets as offered
     *
     * @return bool
     */
    public function getOffered()
    {
        return $this->offered;
    }

    /**
     * Sets a new offered
     *
     * @param bool $offered
     * @return self
     */
    public function setOffered($offered)
    {
        $this->offered = $offered;
        return $this;
    }

    /**
     * Gets as packagingName
     *
     * @return string
     */
    public function getPackagingName()
    {
        return $this->packagingName;
    }

    /**
     * Sets a new packagingName
     *
     * @param string $packagingName
     * @return self
     */
    public function setPackagingName($packagingName)
    {
        $this->packagingName = $packagingName;
        return $this;
    }

    /**
     * Gets as linkedTo
     *
     * @return int
     */
    public function getLinkedTo()
    {
        return $this->linkedTo;
    }

    /**
     * Sets a new linkedTo
     *
     * @param int $linkedTo
     * @return self
     */
    public function setLinkedTo($linkedTo)
    {
        $this->linkedTo = $linkedTo;
        return $this;
    }


}

