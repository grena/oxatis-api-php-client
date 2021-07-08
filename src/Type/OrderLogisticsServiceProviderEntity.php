<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderLogisticsServiceProviderEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var int
     */
    protected $OrderID;

    /**
     * @var \DateTimeInterface
     */
    protected $Date;

    /**
     * @var string
     */
    protected $Instructions;

    /**
     * @return int
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return OrderLogisticsServiceProviderEntity
     */
    public function withOrderID($OrderID)
    {
        $new = clone $this;
        $new->OrderID = $OrderID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return OrderLogisticsServiceProviderEntity
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $Instructions
     * @return OrderLogisticsServiceProviderEntity
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

        return $new;
    }


}

