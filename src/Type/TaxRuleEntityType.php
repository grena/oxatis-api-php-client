<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing TaxRuleEntityType
 *
 *
 * XSD Type: TaxRuleEntity
 */
class TaxRuleEntityType extends OxatisEntityType
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $priority
     */
    private $priority = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $userTaxClassArray
     */
    private $userTaxClassArray = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $productTaxClassArray
     */
    private $productTaxClassArray = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType[] $taxZoneRateArray
     */
    private $taxZoneRateArray = null;

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
     * Gets as priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * @param int $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Adds as userTaxClass
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType $userTaxClass
     */
    public function addToUserTaxClassArray(TaxClassOxIdEntityType $userTaxClass)
    {
        $this->userTaxClassArray[] = $userTaxClass;
        return $this;
    }

    /**
     * isset userTaxClassArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserTaxClassArray($index)
    {
        return isset($this->userTaxClassArray[$index]);
    }

    /**
     * unset userTaxClassArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserTaxClassArray($index)
    {
        unset($this->userTaxClassArray[$index]);
    }

    /**
     * Gets as userTaxClassArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[]
     */
    public function getUserTaxClassArray()
    {
        return $this->userTaxClassArray;
    }

    /**
     * Sets a new userTaxClassArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $userTaxClassArray
     * @return self
     */
    public function setUserTaxClassArray(array $userTaxClassArray)
    {
        $this->userTaxClassArray = $userTaxClassArray;
        return $this;
    }

    /**
     * Adds as productTaxClass
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType $productTaxClass
     */
    public function addToProductTaxClassArray(TaxClassOxIdEntityType $productTaxClass)
    {
        $this->productTaxClassArray[] = $productTaxClass;
        return $this;
    }

    /**
     * isset productTaxClassArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductTaxClassArray($index)
    {
        return isset($this->productTaxClassArray[$index]);
    }

    /**
     * unset productTaxClassArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductTaxClassArray($index)
    {
        unset($this->productTaxClassArray[$index]);
    }

    /**
     * Gets as productTaxClassArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[]
     */
    public function getProductTaxClassArray()
    {
        return $this->productTaxClassArray;
    }

    /**
     * Sets a new productTaxClassArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $productTaxClassArray
     * @return self
     */
    public function setProductTaxClassArray(array $productTaxClassArray)
    {
        $this->productTaxClassArray = $productTaxClassArray;
        return $this;
    }

    /**
     * Adds as taxZoneRate
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType $taxZoneRate
     */
    public function addToTaxZoneRateArray(TaxZoneRateOxIdEntityType $taxZoneRate)
    {
        $this->taxZoneRateArray[] = $taxZoneRate;
        return $this;
    }

    /**
     * isset taxZoneRateArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxZoneRateArray($index)
    {
        return isset($this->taxZoneRateArray[$index]);
    }

    /**
     * unset taxZoneRateArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxZoneRateArray($index)
    {
        unset($this->taxZoneRateArray[$index]);
    }

    /**
     * Gets as taxZoneRateArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType[]
     */
    public function getTaxZoneRateArray()
    {
        return $this->taxZoneRateArray;
    }

    /**
     * Sets a new taxZoneRateArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType[] $taxZoneRateArray
     * @return self
     */
    public function setTaxZoneRateArray(array $taxZoneRateArray)
    {
        $this->taxZoneRateArray = $taxZoneRateArray;
        return $this;
    }


}

