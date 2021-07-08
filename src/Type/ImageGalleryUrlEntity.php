<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryUrlEntity extends \Heavymind\Oxatis\ApiClient\Type\ImageGalleryHeaderEntity
{

    /**
     * @var string
     */
    protected $Url;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return ImageGalleryUrlEntity
     */
    public function withUrl($Url)
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }


}

