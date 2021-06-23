<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfUpdateItemStockEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UpdateItemStockEntity
     */
    private $UpdateItemStockEntity;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->UpdateItemStockEntity) ? $this->UpdateItemStockEntity : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UpdateItemStockEntity $UpdateItemStockEntity
     * @return ArrayOfUpdateItemStockEntity
     */
    public function withUpdateItemStockEntity($UpdateItemStockEntity)
    {
        $new = clone $this;
        $new->UpdateItemStockEntity = $UpdateItemStockEntity;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UpdateItemStockEntity
     */
    public function getUpdateItemStockEntity()
    {
        return $this->UpdateItemStockEntity;
    }


}

