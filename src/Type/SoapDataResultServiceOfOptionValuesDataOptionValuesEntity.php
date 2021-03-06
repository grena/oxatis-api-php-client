<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOptionValuesDataOptionValuesEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesData $Data
     * @return SoapDataResultServiceOfOptionValuesDataOptionValuesEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

