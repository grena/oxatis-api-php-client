<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfTaxClassOxIdEntity1Type
 *
 *
 * XSD Type: ArrayOfTaxClassOxIdEntity1
 */
class ArrayOfTaxClassOxIdEntity1Type
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $productTaxClass
     */
    private $productTaxClass = [
        
    ];

    /**
     * Adds as productTaxClass
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType $productTaxClass
     */
    public function addToProductTaxClass(TaxClassOxIdEntityType $productTaxClass)
    {
        $this->productTaxClass[] = $productTaxClass;
        return $this;
    }

    /**
     * isset productTaxClass
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductTaxClass($index)
    {
        return isset($this->productTaxClass[$index]);
    }

    /**
     * unset productTaxClass
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductTaxClass($index)
    {
        unset($this->productTaxClass[$index]);
    }

    /**
     * Gets as productTaxClass
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[]
     */
    public function getProductTaxClass()
    {
        return $this->productTaxClass;
    }

    /**
     * Sets a new productTaxClass
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassOxIdEntityType[] $productTaxClass
     * @return self
     */
    public function setProductTaxClass(array $productTaxClass = null)
    {
        $this->productTaxClass = $productTaxClass;
        return $this;
    }


}

