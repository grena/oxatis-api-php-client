<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductListDataProductListEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductListData $Data
     * @return SoapDataResultServiceOfProductListDataProductListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

