<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ShippingTypeListEntityType
 *
 *
 * XSD Type: ShippingTypeListEntity
 */
class ShippingTypeListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType[] $shippingTypeIDs
     */
    private $shippingTypeIDs = null;

    /**
     * Adds as shippingTypeID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType $shippingTypeID
     */
    public function addToShippingTypeIDs(ShippingTypeEntityType $shippingTypeID)
    {
        $this->shippingTypeIDs[] = $shippingTypeID;
        return $this;
    }

    /**
     * isset shippingTypeIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingTypeIDs($index)
    {
        return isset($this->shippingTypeIDs[$index]);
    }

    /**
     * unset shippingTypeIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingTypeIDs($index)
    {
        unset($this->shippingTypeIDs[$index]);
    }

    /**
     * Gets as shippingTypeIDs
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType[]
     */
    public function getShippingTypeIDs()
    {
        return $this->shippingTypeIDs;
    }

    /**
     * Sets a new shippingTypeIDs
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntityType[] $shippingTypeIDs
     * @return self
     */
    public function setShippingTypeIDs(array $shippingTypeIDs)
    {
        $this->shippingTypeIDs = $shippingTypeIDs;
        return $this;
    }


}

