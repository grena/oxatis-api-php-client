<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductBundledItemEntityType
 *
 *
 * XSD Type: ProductBundledItemEntity
 */
class ProductBundledItemEntityType extends OxatisEntityType
{

    /**
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Gets as quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

