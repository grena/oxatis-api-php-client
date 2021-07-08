<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfDataBoolBoolean extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataBool
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataBool
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataBool $Data
     * @return SoapDataResultServiceOfDataBoolBoolean
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

