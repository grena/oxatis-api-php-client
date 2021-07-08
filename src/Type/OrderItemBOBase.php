<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderItemBOBase
{

    /**
     * @var string
     */
    protected $PdtOptDesc;

    /**
     * @var int
     */
    protected $ParentID;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $ProductLanguageISOCode;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var float
     */
    protected $UnitPriceVATIncluded;

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
    protected $EcoTaxValueTaxIncluded;

    /**
     * @var float
     */
    protected $UnitPriceVATExcluded;

    /**
     * @var bool
     */
    protected $UpdateStock;

    /**
     * @var int
     */
    protected $Weight;

    /**
     * @var int
     */
    protected $DimensionHeight;

    /**
     * @var int
     */
    protected $DimensionLength;

    /**
     * @var int
     */
    protected $DimensionWidth;

    /**
     * @return string
     */
    public function getPdtOptDesc()
    {
        return $this->PdtOptDesc;
    }

    /**
     * @param string $PdtOptDesc
     * @return OrderItemBOBase
     */
    public function withPdtOptDesc($PdtOptDesc)
    {
        $new = clone $this;
        $new->PdtOptDesc = $PdtOptDesc;

        return $new;
    }

    /**
     * @return int
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * @param int $ParentID
     * @return OrderItemBOBase
     */
    public function withParentID($ParentID)
    {
        $new = clone $this;
        $new->ParentID = $ParentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return OrderItemBOBase
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductLanguageISOCode()
    {
        return $this->ProductLanguageISOCode;
    }

    /**
     * @param string $ProductLanguageISOCode
     * @return OrderItemBOBase
     */
    public function withProductLanguageISOCode($ProductLanguageISOCode)
    {
        $new = clone $this;
        $new->ProductLanguageISOCode = $ProductLanguageISOCode;

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
     * @return OrderItemBOBase
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnitPriceVATIncluded()
    {
        return $this->UnitPriceVATIncluded;
    }

    /**
     * @param float $UnitPriceVATIncluded
     * @return OrderItemBOBase
     */
    public function withUnitPriceVATIncluded($UnitPriceVATIncluded)
    {
        $new = clone $this;
        $new->UnitPriceVATIncluded = $UnitPriceVATIncluded;

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
     * @return OrderItemBOBase
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
     * @return OrderItemBOBase
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
    public function getEcoTaxValueTaxIncluded()
    {
        return $this->EcoTaxValueTaxIncluded;
    }

    /**
     * @param float $EcoTaxValueTaxIncluded
     * @return OrderItemBOBase
     */
    public function withEcoTaxValueTaxIncluded($EcoTaxValueTaxIncluded)
    {
        $new = clone $this;
        $new->EcoTaxValueTaxIncluded = $EcoTaxValueTaxIncluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnitPriceVATExcluded()
    {
        return $this->UnitPriceVATExcluded;
    }

    /**
     * @param float $UnitPriceVATExcluded
     * @return OrderItemBOBase
     */
    public function withUnitPriceVATExcluded($UnitPriceVATExcluded)
    {
        $new = clone $this;
        $new->UnitPriceVATExcluded = $UnitPriceVATExcluded;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateStock()
    {
        return $this->UpdateStock;
    }

    /**
     * @param bool $UpdateStock
     * @return OrderItemBOBase
     */
    public function withUpdateStock($UpdateStock)
    {
        $new = clone $this;
        $new->UpdateStock = $UpdateStock;

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
     * @return OrderItemBOBase
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
     * @return OrderItemBOBase
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
    public function getDimensionLength()
    {
        return $this->DimensionLength;
    }

    /**
     * @param int $DimensionLength
     * @return OrderItemBOBase
     */
    public function withDimensionLength($DimensionLength)
    {
        $new = clone $this;
        $new->DimensionLength = $DimensionLength;

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
     * @return OrderItemBOBase
     */
    public function withDimensionWidth($DimensionWidth)
    {
        $new = clone $this;
        $new->DimensionWidth = $DimensionWidth;

        return $new;
    }


}

