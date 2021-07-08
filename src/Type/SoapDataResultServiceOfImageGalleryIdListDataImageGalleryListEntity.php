<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfImageGalleryIdListDataImageGalleryListEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdListData $Data
     * @return SoapDataResultServiceOfImageGalleryIdListDataImageGalleryListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

