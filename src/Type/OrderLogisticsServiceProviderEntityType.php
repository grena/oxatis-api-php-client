<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderLogisticsServiceProviderEntityType
 *
 *
 * XSD Type: OrderLogisticsServiceProviderEntity
 */
class OrderLogisticsServiceProviderEntityType extends OxatisEntityType
{

    /**
     * @var int $orderID
     */
    private $orderID = null;

    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var string $instructions
     */
    private $instructions = null;

    /**
     * Gets as orderID
     *
     * @return int
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * @param int $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Sets a new instructions
     *
     * @param string $instructions
     * @return self
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;
        return $this;
    }


}

