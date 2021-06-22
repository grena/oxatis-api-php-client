<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfShippingTypeEntityType
 *
 *
 * XSD Type: ArrayOfShippingTypeEntity
 */
class ArrayOfShippingTypeEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType[] $shippingTypeID
     */
    private $shippingTypeID = [
        
    ];

    /**
     * Adds as shippingTypeID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType $shippingTypeID
     */
    public function addToShippingTypeID(ShippingTypeEntityType $shippingTypeID)
    {
        $this->shippingTypeID[] = $shippingTypeID;
        return $this;
    }

    /**
     * isset shippingTypeID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingTypeID($index)
    {
        return isset($this->shippingTypeID[$index]);
    }

    /**
     * unset shippingTypeID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingTypeID($index)
    {
        unset($this->shippingTypeID[$index]);
    }

    /**
     * Gets as shippingTypeID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType[]
     */
    public function getShippingTypeID()
    {
        return $this->shippingTypeID;
    }

    /**
     * Sets a new shippingTypeID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType[] $shippingTypeID
     * @return self
     */
    public function setShippingTypeID(array $shippingTypeID = null)
    {
        $this->shippingTypeID = $shippingTypeID;
        return $this;
    }


}

