<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SalesRepListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfSalesRepIdEntity
     */
    private $SalesRepsID;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfSalesRepIdEntity
     */
    public function getSalesRepsID()
    {
        return $this->SalesRepsID;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfSalesRepIdEntity $SalesRepsID
     * @return SalesRepListEntity
     */
    public function withSalesRepsID($SalesRepsID)
    {
        $new = clone $this;
        $new->SalesRepsID = $SalesRepsID;

        return $new;
    }


}

