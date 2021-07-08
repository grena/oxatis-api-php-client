<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfSalesRepDataSalesRepEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepData $Data
     * @return SoapDataResultServiceOfSalesRepDataSalesRepEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

