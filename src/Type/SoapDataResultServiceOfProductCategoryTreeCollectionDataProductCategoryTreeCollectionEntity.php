<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProductCategoryTreeCollectionDataProductCategoryTreeCollectionEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeCollectionData
     */
    protected $Data;

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

