<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductPackagingItemEntityType
 *
 *
 * XSD Type: ProductPackagingItemEntity
 */
class ProductPackagingItemEntityType extends ProductPackagingItemBaseEntityType
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

