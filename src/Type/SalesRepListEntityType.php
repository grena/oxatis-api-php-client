<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing SalesRepListEntityType
 *
 *
 * XSD Type: SalesRepListEntity
 */
class SalesRepListEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType[] $salesRepsID
     */
    private $salesRepsID = null;

    /**
     * Adds as salesRepID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType $salesRepID
     */
    public function addToSalesRepsID(SalesRepIdEntityType $salesRepID)
    {
        $this->salesRepsID[] = $salesRepID;
        return $this;
    }

    /**
     * isset salesRepsID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesRepsID($index)
    {
        return isset($this->salesRepsID[$index]);
    }

    /**
     * unset salesRepsID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesRepsID($index)
    {
        unset($this->salesRepsID[$index]);
    }

    /**
     * Gets as salesRepsID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType[]
     */
    public function getSalesRepsID()
    {
        return $this->salesRepsID;
    }

    /**
     * Sets a new salesRepsID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType[] $salesRepsID
     * @return self
     */
    public function setSalesRepsID(array $salesRepsID)
    {
        $this->salesRepsID = $salesRepsID;
        return $this;
    }


}

