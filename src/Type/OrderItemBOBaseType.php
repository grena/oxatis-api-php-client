<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderItemBOBaseType
 *
 *
 * XSD Type: OrderItemBOBase
 */
class OrderItemBOBaseType
{

    /**
     * @var int $weight
     */
    private $weight = null;

    /**
     * @var string $pdtOptDesc
     */
    private $pdtOptDesc = null;

    /**
     * @var int $parentID
     */
    private $parentID = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $productLanguageISOCode
     */
    private $productLanguageISOCode = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var float $unitPriceVATIncluded
     */
    private $unitPriceVATIncluded = null;

    /**
     * @var float $taxRate
     */
    private $taxRate = null;

    /**
     * @var float $discountRate
     */
    private $discountRate = null;

    /**
     * @var float $ecoTaxValueTaxIncluded
     */
    private $ecoTaxValueTaxIncluded = null;

    /**
     * @var float $unitPriceVATExcluded
     */
    private $unitPriceVATExcluded = null;

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
     * Gets as pdtOptDesc
     *
     * @return string
     */
    public function getPdtOptDesc()
    {
        return $this->pdtOptDesc;
    }

    /**
     * Sets a new pdtOptDesc
     *
     * @param string $pdtOptDesc
     * @return self
     */
    public function setPdtOptDesc($pdtOptDesc)
    {
        $this->pdtOptDesc = $pdtOptDesc;
        return $this;
    }

    /**
     * Gets as parentID
     *
     * @return int
     */
    public function getParentID()
    {
        return $this->parentID;
    }

    /**
     * Sets a new parentID
     *
     * @param int $parentID
     * @return self
     */
    public function setParentID($parentID)
    {
        $this->parentID = $parentID;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as productLanguageISOCode
     *
     * @return string
     */
    public function getProductLanguageISOCode()
    {
        return $this->productLanguageISOCode;
    }

    /**
     * Sets a new productLanguageISOCode
     *
     * @param string $productLanguageISOCode
     * @return self
     */
    public function setProductLanguageISOCode($productLanguageISOCode)
    {
        $this->productLanguageISOCode = $productLanguageISOCode;
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
     * Gets as unitPriceVATIncluded
     *
     * @return float
     */
    public function getUnitPriceVATIncluded()
    {
        return $this->unitPriceVATIncluded;
    }

    /**
     * Sets a new unitPriceVATIncluded
     *
     * @param float $unitPriceVATIncluded
     * @return self
     */
    public function setUnitPriceVATIncluded($unitPriceVATIncluded)
    {
        $this->unitPriceVATIncluded = $unitPriceVATIncluded;
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
     * Gets as ecoTaxValueTaxIncluded
     *
     * @return float
     */
    public function getEcoTaxValueTaxIncluded()
    {
        return $this->ecoTaxValueTaxIncluded;
    }

    /**
     * Sets a new ecoTaxValueTaxIncluded
     *
     * @param float $ecoTaxValueTaxIncluded
     * @return self
     */
    public function setEcoTaxValueTaxIncluded($ecoTaxValueTaxIncluded)
    {
        $this->ecoTaxValueTaxIncluded = $ecoTaxValueTaxIncluded;
        return $this;
    }

    /**
     * Gets as unitPriceVATExcluded
     *
     * @return float
     */
    public function getUnitPriceVATExcluded()
    {
        return $this->unitPriceVATExcluded;
    }

    /**
     * Sets a new unitPriceVATExcluded
     *
     * @param float $unitPriceVATExcluded
     * @return self
     */
    public function setUnitPriceVATExcluded($unitPriceVATExcluded)
    {
        $this->unitPriceVATExcluded = $unitPriceVATExcluded;
        return $this;
    }


}

