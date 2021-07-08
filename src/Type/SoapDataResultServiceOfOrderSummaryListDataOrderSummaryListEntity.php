<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOrderSummaryListDataOrderSummaryListEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderSummaryListData $Data
     * @return SoapDataResultServiceOfOrderSummaryListDataOrderSummaryListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

