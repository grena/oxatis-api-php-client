<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductBundledItemEntity
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
     * @return ProductBundledItemEntity
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }


}

