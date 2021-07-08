<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryEntity extends \Heavymind\Oxatis\ApiClient\Type\ImageGalleryHeaderEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\FileObject
     */
    protected $MediaContent;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\FileObject
     */
    public function getMediaContent()
    {
        return $this->MediaContent;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\FileObject $MediaContent
     * @return ImageGalleryEntity
     */
    public function withMediaContent($MediaContent)
    {
        $new = clone $this;
        $new->MediaContent = $MediaContent;

        return $new;
    }


}

