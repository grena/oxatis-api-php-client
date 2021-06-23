<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfImageGalleryIdDataImageGalleryIdEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdData $Data
     * @return SoapDataResultServiceOfImageGalleryIdDataImageGalleryIdEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

