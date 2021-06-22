<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfSalesRepIdEntityType
 *
 *
 * XSD Type: ArrayOfSalesRepIdEntity
 */
class ArrayOfSalesRepIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType[] $salesRepID
     */
    private $salesRepID = [
        
    ];

    /**
     * Adds as salesRepID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType $salesRepID
     */
    public function addToSalesRepID(SalesRepIdEntityType $salesRepID)
    {
        $this->salesRepID[] = $salesRepID;
        return $this;
    }

    /**
     * isset salesRepID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesRepID($index)
    {
        return isset($this->salesRepID[$index]);
    }

    /**
     * unset salesRepID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesRepID($index)
    {
        unset($this->salesRepID[$index]);
    }

    /**
     * Gets as salesRepID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType[]
     */
    public function getSalesRepID()
    {
        return $this->salesRepID;
    }

    /**
     * Sets a new salesRepID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\SalesRepIdEntityType[] $salesRepID
     * @return self
     */
    public function setSalesRepID(array $salesRepID = null)
    {
        $this->salesRepID = $salesRepID;
        return $this;
    }


}

