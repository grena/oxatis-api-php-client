<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfImageGalleryIdEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity
     */
    private $ImageGalleryId;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->ImageGalleryId) ? $this->ImageGalleryId : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity $ImageGalleryId
     * @return ArrayOfImageGalleryIdEntity
     */
    public function withImageGalleryId($ImageGalleryId)
    {
        $new = clone $this;
        $new->ImageGalleryId = $ImageGalleryId;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryIdEntity
     */
    public function getImageGalleryId()
    {
        return $this->ImageGalleryId;
    }


}

