<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductImageListDataProductImageListEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductImageListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductImageListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductImageListData $Data
     * @return SoapDataResultServiceOfProductImageListDataProductImageListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

