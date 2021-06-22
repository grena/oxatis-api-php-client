<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing CatalogAccessTypeEntityType
 *
 *
 * XSD Type: CatalogAccessTypeEntity
 */
class CatalogAccessTypeEntityType extends OxatisEntityType
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $systemName
     */
    private $systemName = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[] $catalogAccessValues
     */
    private $catalogAccessValues = null;

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
     * Gets as systemName
     *
     * @return string
     */
    public function getSystemName()
    {
        return $this->systemName;
    }

    /**
     * Sets a new systemName
     *
     * @param string $systemName
     * @return self
     */
    public function setSystemName($systemName)
    {
        $this->systemName = $systemName;
        return $this;
    }

    /**
     * Adds as catalogAccessValue
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType $catalogAccessValue
     */
    public function addToCatalogAccessValues(CatalogAccessValueEntityType $catalogAccessValue)
    {
        $this->catalogAccessValues[] = $catalogAccessValue;
        return $this;
    }

    /**
     * isset catalogAccessValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogAccessValues($index)
    {
        return isset($this->catalogAccessValues[$index]);
    }

    /**
     * unset catalogAccessValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogAccessValues($index)
    {
        unset($this->catalogAccessValues[$index]);
    }

    /**
     * Gets as catalogAccessValues
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[]
     */
    public function getCatalogAccessValues()
    {
        return $this->catalogAccessValues;
    }

    /**
     * Sets a new catalogAccessValues
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[] $catalogAccessValues
     * @return self
     */
    public function setCatalogAccessValues(array $catalogAccessValues)
    {
        $this->catalogAccessValues = $catalogAccessValues;
        return $this;
    }


}

