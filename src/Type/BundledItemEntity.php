<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class BundledItemEntity extends \Heavymind\Oxatis\ApiClient\Type\BundledItemBaseEntity
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
     * @return BundledItemEntity
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }


}

