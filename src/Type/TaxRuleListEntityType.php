<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing TaxRuleListEntityType
 *
 *
 * XSD Type: TaxRuleListEntity
 */
class TaxRuleListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType[] $taxRuleArray
     */
    private $taxRuleArray = null;

    /**
     * Adds as taxRule
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType $taxRule
     */
    public function addToTaxRuleArray(TaxRuleEntityType $taxRule)
    {
        $this->taxRuleArray[] = $taxRule;
        return $this;
    }

    /**
     * isset taxRuleArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxRuleArray($index)
    {
        return isset($this->taxRuleArray[$index]);
    }

    /**
     * unset taxRuleArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxRuleArray($index)
    {
        unset($this->taxRuleArray[$index]);
    }

    /**
     * Gets as taxRuleArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType[]
     */
    public function getTaxRuleArray()
    {
        return $this->taxRuleArray;
    }

    /**
     * Sets a new taxRuleArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType[] $taxRuleArray
     * @return self
     */
    public function setTaxRuleArray(array $taxRuleArray)
    {
        $this->taxRuleArray = $taxRuleArray;
        return $this;
    }


}

