<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfCountDataInt32 extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CountData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CountData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CountData $Data
     * @return SoapDataResultServiceOfCountDataInt32
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

