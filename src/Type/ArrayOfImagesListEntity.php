<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfImagesListEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImagesListEntity
     */
    private $Image;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->Image) ? $this->Image : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListEntity $Image
     * @return ArrayOfImagesListEntity
     */
    public function withImage($Image)
    {
        $new = clone $this;
        $new->Image = $Image;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImagesListEntity
     */
    public function getImage()
    {
        return $this->Image;
    }


}

