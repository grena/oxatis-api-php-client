<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfSalesRepListDataSalesRepListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepListData
     */
    private $Data;

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

