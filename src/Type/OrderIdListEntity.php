<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderIdListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity
     */
    protected $OrderIDs;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity
     */
    public function getOrderIDs()
    {
        return $this->OrderIDs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity $OrderIDs
     * @return OrderIdListEntity
     */
    public function withOrderIDs($OrderIDs)
    {
        $new = clone $this;
        $new->OrderIDs = $OrderIDs;

        return $new;
    }


}

