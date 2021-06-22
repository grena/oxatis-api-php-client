<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderSourceEntityType
 *
 *
 * XSD Type: OrderSourceEntity
 */
class OrderSourceEntityType extends OrderPeriodEntityType
{

    /**
     * @var string $sourceOrderID
     */
    private $sourceOrderID = null;

    /**
     * @var int $sourceTypeID
     */
    private $sourceTypeID = null;

    /**
     * Gets as sourceOrderID
     *
     * @return string
     */
    public function getSourceOrderID()
    {
        return $this->sourceOrderID;
    }

    /**
     * Sets a new sourceOrderID
     *
     * @param string $sourceOrderID
     * @return self
     */
    public function setSourceOrderID($sourceOrderID)
    {
        $this->sourceOrderID = $sourceOrderID;
        return $this;
    }

    /**
     * Gets as sourceTypeID
     *
     * @return int
     */
    public function getSourceTypeID()
    {
        return $this->sourceTypeID;
    }

    /**
     * Sets a new sourceTypeID
     *
     * @param int $sourceTypeID
     * @return self
     */
    public function setSourceTypeID($sourceTypeID)
    {
        $this->sourceTypeID = $sourceTypeID;
        return $this;
    }


}

