<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class LinkedProductEntity extends LinkedProductBaseEntity
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
     * @return LinkedProductEntity
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }


}

