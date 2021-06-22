<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing CatalogAccessTypeListEntityType
 *
 *
 * XSD Type: CatalogAccessTypeListEntity
 */
class CatalogAccessTypeListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CatalogAccessTypeEntityType[] $catalogAccessType
     */
    private $catalogAccessType = [
        
    ];

    /**
     * Adds as catalogAccessType
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessTypeEntityType $catalogAccessType
     */
    public function addToCatalogAccessType(CatalogAccessTypeEntityType $catalogAccessType)
    {
        $this->catalogAccessType[] = $catalogAccessType;
        return $this;
    }

    /**
     * isset catalogAccessType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogAccessType($index)
    {
        return isset($this->catalogAccessType[$index]);
    }

    /**
     * unset catalogAccessType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogAccessType($index)
    {
        unset($this->catalogAccessType[$index]);
    }

    /**
     * Gets as catalogAccessType
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CatalogAccessTypeEntityType[]
     */
    public function getCatalogAccessType()
    {
        return $this->catalogAccessType;
    }

    /**
     * Sets a new catalogAccessType
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessTypeEntityType[] $catalogAccessType
     * @return self
     */
    public function setCatalogAccessType(array $catalogAccessType)
    {
        $this->catalogAccessType = $catalogAccessType;
        return $this;
    }


}

