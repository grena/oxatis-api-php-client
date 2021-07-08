<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SummaryListResultService extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SummaryResultList
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SummaryResultList
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SummaryResultList $Data
     * @return SummaryListResultService
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

