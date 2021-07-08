<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ShippingTypeListEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfShippingTypeEntity
     */
    protected $ShippingTypeIDs;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfShippingTypeEntity
     */
    public function getShippingTypeIDs()
    {
        return $this->ShippingTypeIDs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfShippingTypeEntity $ShippingTypeIDs
     * @return ShippingTypeListEntity
     */
    public function withShippingTypeIDs($ShippingTypeIDs)
    {
        $new = clone $this;
        $new->ShippingTypeIDs = $ShippingTypeIDs;

        return $new;
    }


}

