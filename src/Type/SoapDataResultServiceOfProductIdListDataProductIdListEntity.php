<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductIdListDataProductIdListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdListData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdListData $Data
     * @return SoapDataResultServiceOfProductIdListDataProductIdListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

