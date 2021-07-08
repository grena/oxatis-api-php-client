<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ShippingTypeListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeListEntity
     */
    protected $ShippingTypeList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeListEntity
     */
    public function getShippingTypeList()
    {
        return $this->ShippingTypeList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeListEntity $ShippingTypeList
     * @return ShippingTypeListData
     */
    public function withShippingTypeList($ShippingTypeList)
    {
        $new = clone $this;
        $new->ShippingTypeList = $ShippingTypeList;

        return $new;
    }


}

