<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationDetailBaseEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var int
     */
    protected $PdtOptID;

    /**
     * @var int
     */
    protected $ItemOxID;

    /**
     * @var string
     */
    protected $ItemSKU;

    /**
     * @var string
     */
    protected $ItemSKUOriginal;

    /**
     * @var string
     */
    protected $ItemName;

    /**
     * @var float
     */
    protected $GrossPrice;

    /**
     * @var float
     */
    protected $GrossAmount;

    /**
     * @var float
     */
    protected $TaxRate;

    /**
     * @var float
     */
    protected $DiscountRate;

    /**
     * @var float
     */
    protected $NetPrice;

    /**
     * @var float
     */
    protected $NetAmount;

    /**
     * @var float
     */
    protected $VATAmount;

    /**
     * @var float
     */
    protected $EcoTaxValueTaxIncl;

    /**
     * @var string
     */
    protected $DiscountCoupon;

    /**
     * @var string
     */
    protected $Attribute1Name;

    /**
     * @var string
     */
    protected $Attribute1Value;

    /**
     * @var string
     */
    protected $Attribute2Name;

    /**
     * @var string
     */
    protected $Attribute2Value;

    /**
     * @var string
     */
    protected $AttributeTextName;

    /**
     * @var string
     */
    protected $AttributeTextValue;

    /**
     * @var string
     */
    protected $ItemMainImageUrl;

    /**
     * @var string
     */
    protected $ItemThumbnailImageUrl;

    /**
     * @var string
     */
    protected $Option1Name;

    /**
     * @var string
     */
    protected $Option1Value;

    /**
     * @var string
     */
    protected $Option2Name;

    /**
     * @var string
     */
    protected $Option2Value;

    /**
     * @var string
     */
    protected $Option3Name;

    /**
     * @var string
     */
    protected $Option3Value;

    /**
     * @var bool
     */
    protected $Offered;

    /**
     * @var string
     */
    protected $PackagingName;

    /**
     * @var int
     */
    protected $LinkedTo;

    /**
     * @var float
     */
    protected $Weight;

    /**
     * @var float
     */
    protected $DimensionHeight;

    /**
     * @var float
     */
    protected $DimensionWidth;

    /**
     * @var float
     */
    protected $DimensionLength;

    /**
     * @return int
     */
    public function getPdtOptID()
    {
        return $this->PdtOptID;
    }

    /**
     * @param int $PdtOptID
     * @return QuotationDetailBaseEntity
     */
    public function withPdtOptID($PdtOptID)
    {
        $new = clone $this;
        $new->PdtOptID = $PdtOptID;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemOxID()
    {
        return $this->ItemOxID;
    }

    /**
     * @param int $ItemOxID
     * @return QuotationDetailBaseEntity
     */
    public function withItemOxID($ItemOxID)
    {
        $new = clone $this;
        $new->ItemOxID = $ItemOxID;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemSKU()
    {
        return $this->ItemSKU;
    }

    /**
     * @param string $ItemSKU
     * @return QuotationDetailBaseEntity
     */
    public function withItemSKU($ItemSKU)
    {
        $new = clone $this;
        $new->ItemSKU = $ItemSKU;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemSKUOriginal()
    {
        return $this->ItemSKUOriginal;
    }

    /**
     * @param string $ItemSKUOriginal
     * @return QuotationDetailBaseEntity
     */
    public function withItemSKUOriginal($ItemSKUOriginal)
    {
        $new = clone $this;
        $new->ItemSKUOriginal = $ItemSKUOriginal;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
        return $this->ItemName;
    }

    /**
     * @param string $ItemName
     * @return QuotationDetailBaseEntity
     */
    public function withItemName($ItemName)
    {
        $new = clone $this;
        $new->ItemName = $ItemName;

        return $new;
    }

    /**
     * @return float
     */
    public function getGrossPrice()
    {
        return $this->GrossPrice;
    }

    /**
     * @param float $GrossPrice
     * @return QuotationDetailBaseEntity
     */
    public function withGrossPrice($GrossPrice)
    {
        $new = clone $this;
        $new->GrossPrice = $GrossPrice;

        return $new;
    }

    /**
     * @return float
     */
    public function getGrossAmount()
    {
        return $this->GrossAmount;
    }

    /**
     * @param float $GrossAmount
     * @return QuotationDetailBaseEntity
     */
    public function withGrossAmount($GrossAmount)
    {
        $new = clone $this;
        $new->GrossAmount = $GrossAmount;

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
     * @return QuotationDetailBaseEntity
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
    public function getDiscountRate()
    {
        return $this->DiscountRate;
    }

    /**
     * @param float $DiscountRate
     * @return QuotationDetailBaseEntity
     */
    public function withDiscountRate($DiscountRate)
    {
        $new = clone $this;
        $new->DiscountRate = $DiscountRate;

        return $new;
    }

    /**
     * @return float
     */
    public function getNetPrice()
    {
        return $this->NetPrice;
    }

    /**
     * @param float $NetPrice
     * @return QuotationDetailBaseEntity
     */
    public function withNetPrice($NetPrice)
    {
        $new = clone $this;
        $new->NetPrice = $NetPrice;

        return $new;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }

    /**
     * @param float $NetAmount
     * @return QuotationDetailBaseEntity
     */
    public function withNetAmount($NetAmount)
    {
        $new = clone $this;
        $new->NetAmount = $NetAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getVATAmount()
    {
        return $this->VATAmount;
    }

    /**
     * @param float $VATAmount
     * @return QuotationDetailBaseEntity
     */
    public function withVATAmount($VATAmount)
    {
        $new = clone $this;
        $new->VATAmount = $VATAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getEcoTaxValueTaxIncl()
    {
        return $this->EcoTaxValueTaxIncl;
    }

    /**
     * @param float $EcoTaxValueTaxIncl
     * @return QuotationDetailBaseEntity
     */
    public function withEcoTaxValueTaxIncl($EcoTaxValueTaxIncl)
    {
        $new = clone $this;
        $new->EcoTaxValueTaxIncl = $EcoTaxValueTaxIncl;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiscountCoupon()
    {
        return $this->DiscountCoupon;
    }

    /**
     * @param string $DiscountCoupon
     * @return QuotationDetailBaseEntity
     */
    public function withDiscountCoupon($DiscountCoupon)
    {
        $new = clone $this;
        $new->DiscountCoupon = $DiscountCoupon;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttribute1Name()
    {
        return $this->Attribute1Name;
    }

    /**
     * @param string $Attribute1Name
     * @return QuotationDetailBaseEntity
     */
    public function withAttribute1Name($Attribute1Name)
    {
        $new = clone $this;
        $new->Attribute1Name = $Attribute1Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttribute1Value()
    {
        return $this->Attribute1Value;
    }

    /**
     * @param string $Attribute1Value
     * @return QuotationDetailBaseEntity
     */
    public function withAttribute1Value($Attribute1Value)
    {
        $new = clone $this;
        $new->Attribute1Value = $Attribute1Value;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttribute2Name()
    {
        return $this->Attribute2Name;
    }

    /**
     * @param string $Attribute2Name
     * @return QuotationDetailBaseEntity
     */
    public function withAttribute2Name($Attribute2Name)
    {
        $new = clone $this;
        $new->Attribute2Name = $Attribute2Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttribute2Value()
    {
        return $this->Attribute2Value;
    }

    /**
     * @param string $Attribute2Value
     * @return QuotationDetailBaseEntity
     */
    public function withAttribute2Value($Attribute2Value)
    {
        $new = clone $this;
        $new->Attribute2Value = $Attribute2Value;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttributeTextName()
    {
        return $this->AttributeTextName;
    }

    /**
     * @param string $AttributeTextName
     * @return QuotationDetailBaseEntity
     */
    public function withAttributeTextName($AttributeTextName)
    {
        $new = clone $this;
        $new->AttributeTextName = $AttributeTextName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttributeTextValue()
    {
        return $this->AttributeTextValue;
    }

    /**
     * @param string $AttributeTextValue
     * @return QuotationDetailBaseEntity
     */
    public function withAttributeTextValue($AttributeTextValue)
    {
        $new = clone $this;
        $new->AttributeTextValue = $AttributeTextValue;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemMainImageUrl()
    {
        return $this->ItemMainImageUrl;
    }

    /**
     * @param string $ItemMainImageUrl
     * @return QuotationDetailBaseEntity
     */
    public function withItemMainImageUrl($ItemMainImageUrl)
    {
        $new = clone $this;
        $new->ItemMainImageUrl = $ItemMainImageUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemThumbnailImageUrl()
    {
        return $this->ItemThumbnailImageUrl;
    }

    /**
     * @param string $ItemThumbnailImageUrl
     * @return QuotationDetailBaseEntity
     */
    public function withItemThumbnailImageUrl($ItemThumbnailImageUrl)
    {
        $new = clone $this;
        $new->ItemThumbnailImageUrl = $ItemThumbnailImageUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getOption1Name()
    {
        return $this->Option1Name;
    }

    /**
     * @param string $Option1Name
     * @return QuotationDetailBaseEntity
     */
    public function withOption1Name($Option1Name)
    {
        $new = clone $this;
        $new->Option1Name = $Option1Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getOption1Value()
    {
        return $this->Option1Value;
    }

    /**
     * @param string $Option1Value
     * @return QuotationDetailBaseEntity
     */
    public function withOption1Value($Option1Value)
    {
        $new = clone $this;
        $new->Option1Value = $Option1Value;

        return $new;
    }

    /**
     * @return string
     */
    public function getOption2Name()
    {
        return $this->Option2Name;
    }

    /**
     * @param string $Option2Name
     * @return QuotationDetailBaseEntity
     */
    public function withOption2Name($Option2Name)
    {
        $new = clone $this;
        $new->Option2Name = $Option2Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getOption2Value()
    {
        return $this->Option2Value;
    }

    /**
     * @param string $Option2Value
     * @return QuotationDetailBaseEntity
     */
    public function withOption2Value($Option2Value)
    {
        $new = clone $this;
        $new->Option2Value = $Option2Value;

        return $new;
    }

    /**
     * @return string
     */
    public function getOption3Name()
    {
        return $this->Option3Name;
    }

    /**
     * @param string $Option3Name
     * @return QuotationDetailBaseEntity
     */
    public function withOption3Name($Option3Name)
    {
        $new = clone $this;
        $new->Option3Name = $Option3Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getOption3Value()
    {
        return $this->Option3Value;
    }

    /**
     * @param string $Option3Value
     * @return QuotationDetailBaseEntity
     */
    public function withOption3Value($Option3Value)
    {
        $new = clone $this;
        $new->Option3Value = $Option3Value;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOffered()
    {
        return $this->Offered;
    }

    /**
     * @param bool $Offered
     * @return QuotationDetailBaseEntity
     */
    public function withOffered($Offered)
    {
        $new = clone $this;
        $new->Offered = $Offered;

        return $new;
    }

    /**
     * @return string
     */
    public function getPackagingName()
    {
        return $this->PackagingName;
    }

    /**
     * @param string $PackagingName
     * @return QuotationDetailBaseEntity
     */
    public function withPackagingName($PackagingName)
    {
        $new = clone $this;
        $new->PackagingName = $PackagingName;

        return $new;
    }

    /**
     * @return int
     */
    public function getLinkedTo()
    {
        return $this->LinkedTo;
    }

    /**
     * @param int $LinkedTo
     * @return QuotationDetailBaseEntity
     */
    public function withLinkedTo($LinkedTo)
    {
        $new = clone $this;
        $new->LinkedTo = $LinkedTo;

        return $new;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return QuotationDetailBaseEntity
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return float
     */
    public function getDimensionHeight()
    {
        return $this->DimensionHeight;
    }

    /**
     * @param float $DimensionHeight
     * @return QuotationDetailBaseEntity
     */
    public function withDimensionHeight($DimensionHeight)
    {
        $new = clone $this;
        $new->DimensionHeight = $DimensionHeight;

        return $new;
    }

    /**
     * @return float
     */
    public function getDimensionWidth()
    {
        return $this->DimensionWidth;
    }

    /**
     * @param float $DimensionWidth
     * @return QuotationDetailBaseEntity
     */
    public function withDimensionWidth($DimensionWidth)
    {
        $new = clone $this;
        $new->DimensionWidth = $DimensionWidth;

        return $new;
    }

    /**
     * @return float
     */
    public function getDimensionLength()
    {
        return $this->DimensionLength;
    }

    /**
     * @param float $DimensionLength
     * @return QuotationDetailBaseEntity
     */
    public function withDimensionLength($DimensionLength)
    {
        $new = clone $this;
        $new->DimensionLength = $DimensionLength;

        return $new;
    }


}

