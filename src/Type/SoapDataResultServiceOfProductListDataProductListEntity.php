<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductListDataProductListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductListData
     */
    private $Data;

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

