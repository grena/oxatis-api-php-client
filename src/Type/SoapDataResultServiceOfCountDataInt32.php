<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfCountDataInt32
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CountData
     */
    private $Data;

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

