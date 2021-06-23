<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfImageGalleryIdListDataImageGalleryListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdListData
     */
    private $Data;

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

