<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductCategoryDataProductCategoryEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductCategoryData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductCategoryData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductCategoryData $Data
     * @return SoapDataResultServiceOfProductCategoryDataProductCategoryEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

