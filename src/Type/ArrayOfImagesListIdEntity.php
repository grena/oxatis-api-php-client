<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfImagesListIdEntity implements IteratorAggregate, Traversable
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntity
     */
    private $ImageList;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->ImageList) ? $this->ImageList : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntity $ImageList
     * @return ArrayOfImagesListIdEntity
     */
    public function withImageList($ImageList)
    {
        $new = clone $this;
        $new->ImageList = $ImageList;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntity
     */
    public function getImageList()
    {
        return $this->ImageList;
    }


}

