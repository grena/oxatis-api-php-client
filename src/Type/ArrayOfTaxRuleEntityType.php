<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfTaxRuleEntityType
 *
 *
 * XSD Type: ArrayOfTaxRuleEntity
 */
class ArrayOfTaxRuleEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType[] $taxRule
     */
    private $taxRule = [
        
    ];

    /**
     * Adds as taxRule
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType $taxRule
     */
    public function addToTaxRule(TaxRuleEntityType $taxRule)
    {
        $this->taxRule[] = $taxRule;
        return $this;
    }

    /**
     * isset taxRule
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxRule($index)
    {
        return isset($this->taxRule[$index]);
    }

    /**
     * unset taxRule
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxRule($index)
    {
        unset($this->taxRule[$index]);
    }

    /**
     * Gets as taxRule
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType[]
     */
    public function getTaxRule()
    {
        return $this->taxRule;
    }

    /**
     * Sets a new taxRule
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRuleEntityType[] $taxRule
     * @return self
     */
    public function setTaxRule(array $taxRule = null)
    {
        $this->taxRule = $taxRule;
        return $this;
    }


}

