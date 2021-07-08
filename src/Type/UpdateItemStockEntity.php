<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UpdateItemStockEntity extends ProductIdEntity
{

    /**
     * @var int
     */
    protected $QtyInStock;

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

