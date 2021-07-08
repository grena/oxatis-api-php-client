<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfRelatedItemsDataProductRelatedItemsEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\RelatedItemsData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\RelatedItemsData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\RelatedItemsData $Data
     * @return SoapDataResultServiceOfRelatedItemsDataProductRelatedItemsEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

