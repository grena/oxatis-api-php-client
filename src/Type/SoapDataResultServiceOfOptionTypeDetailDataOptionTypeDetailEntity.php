<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOptionTypeDetailDataOptionTypeDetailEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypeDetailData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypeDetailData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypeDetailData $Data
     * @return SoapDataResultServiceOfOptionTypeDetailDataOptionTypeDetailEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

