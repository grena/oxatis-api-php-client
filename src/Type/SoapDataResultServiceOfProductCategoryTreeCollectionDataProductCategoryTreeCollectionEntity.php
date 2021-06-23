<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductCategoryTreeCollectionDataProductCategoryTreeCollectionEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeCollectionData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeCollectionData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeCollectionData $Data
     * @return SoapDataResultServiceOfProductCategoryTreeCollectionDataProductCategoryTreeCollectionEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

