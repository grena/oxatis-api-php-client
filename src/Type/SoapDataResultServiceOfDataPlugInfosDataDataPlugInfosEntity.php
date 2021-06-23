<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfDataPlugInfosDataDataPlugInfosEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataPlugInfosData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataPlugInfosData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataPlugInfosData $Data
     * @return SoapDataResultServiceOfDataPlugInfosDataDataPlugInfosEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

