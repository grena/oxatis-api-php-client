<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPackagingItemEntity
{

    /**
     * @var int
     */
    private $Quantity;

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

