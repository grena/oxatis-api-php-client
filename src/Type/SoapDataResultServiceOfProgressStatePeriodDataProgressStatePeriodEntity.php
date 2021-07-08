<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProgressStatePeriodDataProgressStatePeriodEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodData $Data
     * @return SoapDataResultServiceOfProgressStatePeriodDataProgressStatePeriodEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

