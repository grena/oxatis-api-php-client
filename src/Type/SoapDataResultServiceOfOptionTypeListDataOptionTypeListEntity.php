<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOptionTypeListDataOptionTypeListEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypeListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypeListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypeListData $Data
     * @return SoapDataResultServiceOfOptionTypeListDataOptionTypeListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

