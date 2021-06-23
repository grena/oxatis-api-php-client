<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfDTDataDateTime
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DTData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DTData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DTData $Data
     * @return SoapDataResultServiceOfDTDataDateTime
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

