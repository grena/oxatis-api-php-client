<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfTaxClassEntityType
 *
 *
 * XSD Type: ArrayOfTaxClassEntity
 */
class ArrayOfTaxClassEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType[] $taxClass
     */
    private $taxClass = [
        
    ];

    /**
     * Adds as taxClass
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType $taxClass
     */
    public function addToTaxClass(TaxClassEntityType $taxClass)
    {
        $this->taxClass[] = $taxClass;
        return $this;
    }

    /**
     * isset taxClass
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxClass($index)
    {
        return isset($this->taxClass[$index]);
    }

    /**
     * unset taxClass
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxClass($index)
    {
        unset($this->taxClass[$index]);
    }

    /**
     * Gets as taxClass
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType[]
     */
    public function getTaxClass()
    {
        return $this->taxClass;
    }

    /**
     * Sets a new taxClass
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType[] $taxClass
     * @return self
     */
    public function setTaxClass(array $taxClass = null)
    {
        $this->taxClass = $taxClass;
        return $this;
    }


}

