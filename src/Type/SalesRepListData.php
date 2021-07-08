<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SalesRepListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepListEntity
     */
    protected $SalesRepList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepListEntity
     */
    public function getSalesRepList()
    {
        return $this->SalesRepList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepListEntity $SalesRepList
     * @return SalesRepListData
     */
    public function withSalesRepList($SalesRepList)
    {
        $new = clone $this;
        $new->SalesRepList = $SalesRepList;

        return $new;
    }


}

