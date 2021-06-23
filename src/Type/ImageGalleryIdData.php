<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryIdData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity
     */
    private $ImageGalleryId;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity
     */
    public function getImageGalleryId()
    {
        return $this->ImageGalleryId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity $ImageGalleryId
     * @return ImageGalleryIdData
     */
    public function withImageGalleryId($ImageGalleryId)
    {
        $new = clone $this;
        $new->ImageGalleryId = $ImageGalleryId;

        return $new;
    }


}

