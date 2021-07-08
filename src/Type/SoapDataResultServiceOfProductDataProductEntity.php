<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductDataProductEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductData $Data
     * @return SoapDataResultServiceOfProductDataProductEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

