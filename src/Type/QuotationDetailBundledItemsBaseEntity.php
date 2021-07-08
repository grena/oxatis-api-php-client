<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationDetailBundledItemsBaseEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
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
    protected $ItemName;

    /**
     * @var float
     */
    protected $GrossPrice;

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
     * @return int
     */
    public function getItemOxID()
    {
        return $this->ItemOxID;
    }

    /**
     * @param int $ItemOxID
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
    public function getItemName()
    {
        return $this->ItemName;
    }

    /**
     * @param string $ItemName
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
     */
    public function withGrossPrice($GrossPrice)
    {
        $new = clone $this;
        $new->GrossPrice = $GrossPrice;

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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
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
     * @return QuotationDetailBundledItemsBaseEntity
     */
    public function withOffered($Offered)
    {
        $new = clone $this;
        $new->Offered = $Offered;

        return $new;
    }


}

