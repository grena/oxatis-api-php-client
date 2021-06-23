<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfShippingTypeDataShippingTypeEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeData $Data
     * @return SoapDataResultServiceOfShippingTypeDataShippingTypeEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

