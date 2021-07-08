<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPackagingItemEntity extends \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemBaseEntity
{

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return ProductPackagingItemEntity
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }


}

