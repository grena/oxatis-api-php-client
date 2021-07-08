<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOrderIdListDataOrderIdListEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderIdListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderIdListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderIdListData $Data
     * @return SoapDataResultServiceOfOrderIdListDataOrderIdListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

