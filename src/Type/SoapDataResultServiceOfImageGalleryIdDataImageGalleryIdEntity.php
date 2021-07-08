<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfImageGalleryIdDataImageGalleryIdEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdData
     */
    protected $Data;

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

