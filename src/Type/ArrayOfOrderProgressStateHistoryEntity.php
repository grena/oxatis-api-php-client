<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfOrderProgressStateHistoryEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntity
     */
    private $OrderProgressStateHistoryEntity;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->OrderProgressStateHistoryEntity) ? $this->OrderProgressStateHistoryEntity : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntity $OrderProgressStateHistoryEntity
     * @return ArrayOfOrderProgressStateHistoryEntity
     */
    public function withOrderProgressStateHistoryEntity($OrderProgressStateHistoryEntity)
    {
        $new = clone $this;
        $new->OrderProgressStateHistoryEntity = $OrderProgressStateHistoryEntity;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderProgressStateHistoryEntity
     */
    public function getOrderProgressStateHistoryEntity()
    {
        return $this->OrderProgressStateHistoryEntity;
    }


}

