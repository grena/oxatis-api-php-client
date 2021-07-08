<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfSalesRepListDataSalesRepListEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepListData $Data
     * @return SoapDataResultServiceOfSalesRepListDataSalesRepListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

