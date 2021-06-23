<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProgressStatePeriodDataProgressStatePeriodEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodData
     */
    private $Data;

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

