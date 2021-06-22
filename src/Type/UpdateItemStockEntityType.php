<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing UpdateItemStockEntityType
 *
 *
 * XSD Type: UpdateItemStockEntity
 */
class UpdateItemStockEntityType extends ProductIdEntityType
{

    /**
     * @var int $qtyInStock
     */
    private $qtyInStock = null;

    /**
     * Gets as qtyInStock
     *
     * @return int
     */
    public function getQtyInStock()
    {
        return $this->qtyInStock;
    }

    /**
     * Sets a new qtyInStock
     *
     * @param int $qtyInStock
     * @return self
     */
    public function setQtyInStock($qtyInStock)
    {
        $this->qtyInStock = $qtyInStock;
        return $this;
    }


}

