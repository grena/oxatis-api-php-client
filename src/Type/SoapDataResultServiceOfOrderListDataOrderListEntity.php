<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOrderListDataOrderListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderListData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderListData $Data
     * @return SoapDataResultServiceOfOrderListDataOrderListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

