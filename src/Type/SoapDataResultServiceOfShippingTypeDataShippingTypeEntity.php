<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfShippingTypeDataShippingTypeEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeData
     */
    protected $Data;

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

