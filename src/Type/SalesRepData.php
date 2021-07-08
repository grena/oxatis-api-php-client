<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SalesRepData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepEntity
     */
    protected $SalesRep;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepEntity
     */
    public function getSalesRep()
    {
        return $this->SalesRep;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepEntity $SalesRep
     * @return SalesRepData
     */
    public function withSalesRep($SalesRep)
    {
        $new = clone $this;
        $new->SalesRep = $SalesRep;

        return $new;
    }


}

