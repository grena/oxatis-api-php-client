<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfCatalogAccessValueEntityType
 *
 *
 * XSD Type: ArrayOfCatalogAccessValueEntity
 */
class ArrayOfCatalogAccessValueEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[] $catalogAccessValue
     */
    private $catalogAccessValue = [
        
    ];

    /**
     * Adds as catalogAccessValue
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType $catalogAccessValue
     */
    public function addToCatalogAccessValue(CatalogAccessValueEntityType $catalogAccessValue)
    {
        $this->catalogAccessValue[] = $catalogAccessValue;
        return $this;
    }

    /**
     * isset catalogAccessValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogAccessValue($index)
    {
        return isset($this->catalogAccessValue[$index]);
    }

    /**
     * unset catalogAccessValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogAccessValue($index)
    {
        unset($this->catalogAccessValue[$index]);
    }

    /**
     * Gets as catalogAccessValue
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[]
     */
    public function getCatalogAccessValue()
    {
        return $this->catalogAccessValue;
    }

    /**
     * Sets a new catalogAccessValue
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[] $catalogAccessValue
     * @return self
     */
    public function setCatalogAccessValue(array $catalogAccessValue = null)
    {
        $this->catalogAccessValue = $catalogAccessValue;
        return $this;
    }


}

