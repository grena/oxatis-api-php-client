<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UpdateItemStockEntity
{

    /**
     * @var int
     */
    private $QtyInStock;

    /**
     * @return int
     */
    public function getQtyInStock()
    {
        return $this->QtyInStock;
    }

    /**
     * @param int $QtyInStock
     * @return UpdateItemStockEntity
     */
    public function withQtyInStock($QtyInStock)
    {
        $new = clone $this;
        $new->QtyInStock = $QtyInStock;

        return $new;
    }


}

