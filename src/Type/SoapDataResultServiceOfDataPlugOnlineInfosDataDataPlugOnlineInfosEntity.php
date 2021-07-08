<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfDataPlugOnlineInfosDataDataPlugOnlineInfosEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosData $Data
     * @return SoapDataResultServiceOfDataPlugOnlineInfosDataDataPlugOnlineInfosEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

