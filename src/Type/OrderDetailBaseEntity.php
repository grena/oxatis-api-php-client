<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderDetailBaseEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

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
     * @var string
     */
    protected $EANCode;

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
     * @var string
     */
    protected $TaxFormula;

    /**
     * @var \DateTimeInterface
     */
    protected $ItemDeliveryDate;

    /**
     * @var string
     */
    protected $AmountTaxList;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfTax
     */
    protected $TaxAmounts;

    /**
     * @return int
     */
    public function getItemOxID()
    {
        return $this->ItemOxID;
    }

    /**
     * @param int $ItemOxID
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
     */
    public function withLinkedTo($LinkedTo)
    {
        $new = clone $this;
        $new->LinkedTo = $LinkedTo;

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
     * @return OrderDetailBaseEntity
     */
    public function withEANCode($EANCode)
    {
        $new = clone $this;
        $new->EANCode = $EANCode;

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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
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
     * @return OrderDetailBaseEntity
     */
    public function withDimensionLength($DimensionLength)
    {
        $new = clone $this;
        $new->DimensionLength = $DimensionLength;

        return $new;
    }

    /**
     * @return string
     */
    public function getTaxFormula()
    {
        return $this->TaxFormula;
    }

    /**
     * @param string $TaxFormula
     * @return OrderDetailBaseEntity
     */
    public function withTaxFormula($TaxFormula)
    {
        $new = clone $this;
        $new->TaxFormula = $TaxFormula;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getItemDeliveryDate()
    {
        return $this->ItemDeliveryDate;
    }

    /**
     * @param \DateTimeInterface $ItemDeliveryDate
     * @return OrderDetailBaseEntity
     */
    public function withItemDeliveryDate($ItemDeliveryDate)
    {
        $new = clone $this;
        $new->ItemDeliveryDate = $ItemDeliveryDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getAmountTaxList()
    {
        return $this->AmountTaxList;
    }

    /**
     * @param string $AmountTaxList
     * @return OrderDetailBaseEntity
     */
    public function withAmountTaxList($AmountTaxList)
    {
        $new = clone $this;
        $new->AmountTaxList = $AmountTaxList;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfTax
     */
    public function getTaxAmounts()
    {
        return $this->TaxAmounts;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfTax $TaxAmounts
     * @return OrderDetailBaseEntity
     */
    public function withTaxAmounts($TaxAmounts)
    {
        $new = clone $this;
        $new->TaxAmounts = $TaxAmounts;

        return $new;
    }


}

