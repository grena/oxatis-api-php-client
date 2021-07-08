<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProgressStateDataProgressStateEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateData $Data
     * @return SoapDataResultServiceOfProgressStateDataProgressStateEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

