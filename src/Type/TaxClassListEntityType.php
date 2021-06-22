<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing TaxClassListEntityType
 *
 *
 * XSD Type: TaxClassListEntity
 */
class TaxClassListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType[] $taxClasseArray
     */
    private $taxClasseArray = null;

    /**
     * Adds as taxClass
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType $taxClass
     */
    public function addToTaxClasseArray(TaxClassEntityType $taxClass)
    {
        $this->taxClasseArray[] = $taxClass;
        return $this;
    }

    /**
     * isset taxClasseArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxClasseArray($index)
    {
        return isset($this->taxClasseArray[$index]);
    }

    /**
     * unset taxClasseArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxClasseArray($index)
    {
        unset($this->taxClasseArray[$index]);
    }

    /**
     * Gets as taxClasseArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType[]
     */
    public function getTaxClasseArray()
    {
        return $this->taxClasseArray;
    }

    /**
     * Sets a new taxClasseArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType[] $taxClasseArray
     * @return self
     */
    public function setTaxClasseArray(array $taxClasseArray)
    {
        $this->taxClasseArray = $taxClasseArray;
        return $this;
    }


}

