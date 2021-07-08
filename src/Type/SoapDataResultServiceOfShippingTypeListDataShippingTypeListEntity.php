<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfShippingTypeListDataShippingTypeListEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeListData $Data
     * @return SoapDataResultServiceOfShippingTypeListDataShippingTypeListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

