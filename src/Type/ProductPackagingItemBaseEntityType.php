<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductPackagingItemBaseEntityType
 *
 *
 * XSD Type: ProductPackagingItemBaseEntity
 */
class ProductPackagingItemBaseEntityType
{

    /**
     * @var string $itemSKU
     */
    private $itemSKU = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var float $price
     */
    private $price = null;

    /**
     * @var bool $optional
     */
    private $optional = null;

    /**
     * Gets as itemSKU
     *
     * @return string
     */
    public function getItemSKU()
    {
        return $this->itemSKU;
    }

    /**
     * Sets a new itemSKU
     *
     * @param string $itemSKU
     * @return self
     */
    public function setItemSKU($itemSKU)
    {
        $this->itemSKU = $itemSKU;
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
     * Gets as price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as optional
     *
     * @return bool
     */
    public function getOptional()
    {
        return $this->optional;
    }

    /**
     * Sets a new optional
     *
     * @param bool $optional
     * @return self
     */
    public function setOptional($optional)
    {
        $this->optional = $optional;
        return $this;
    }


}

