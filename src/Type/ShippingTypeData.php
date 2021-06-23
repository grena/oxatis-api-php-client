<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ShippingTypeData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity
     */
    private $ShippingType;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity
     */
    public function getShippingType()
    {
        return $this->ShippingType;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity $ShippingType
     * @return ShippingTypeData
     */
    public function withShippingType($ShippingType)
    {
        $new = clone $this;
        $new->ShippingType = $ShippingType;

        return $new;
    }


}

