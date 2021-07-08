<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProgressStateLogsDataOrderProgressStateLogsEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateLogsData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateLogsData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateLogsData $Data
     * @return SoapDataResultServiceOfProgressStateLogsDataOrderProgressStateLogsEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

