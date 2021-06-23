<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOxIdDataInt32
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OxIdData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OxIdData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OxIdData $Data
     * @return SoapDataResultServiceOfOxIdDataInt32
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

