<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderIdListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdListEntity
     */
    protected $OrderIdList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderIdListEntity
     */
    public function getOrderIdList()
    {
        return $this->OrderIdList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdListEntity $OrderIdList
     * @return OrderIdListData
     */
    public function withOrderIdList($OrderIdList)
    {
        $new = clone $this;
        $new->OrderIdList = $OrderIdList;

        return $new;
    }


}

