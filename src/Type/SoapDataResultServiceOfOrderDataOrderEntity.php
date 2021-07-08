<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOrderDataOrderEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderData $Data
     * @return SoapDataResultServiceOfOrderDataOrderEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

