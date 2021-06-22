<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfImagesListIdEntity1Type
 *
 *
 * XSD Type: ArrayOfImagesListIdEntity1
 */
class ArrayOfImagesListIdEntity1Type
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $imageList
     */
    private $imageList = [
        
    ];

    /**
     * Adds as imageList
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType $imageList
     */
    public function addToImageList(ImagesListIdEntityType $imageList)
    {
        $this->imageList[] = $imageList;
        return $this;
    }

    /**
     * isset imageList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageList($index)
    {
        return isset($this->imageList[$index]);
    }

    /**
     * unset imageList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageList($index)
    {
        unset($this->imageList[$index]);
    }

    /**
     * Gets as imageList
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[]
     */
    public function getImageList()
    {
        return $this->imageList;
    }

    /**
     * Sets a new imageList
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $imageList
     * @return self
     */
    public function setImageList(array $imageList = null)
    {
        $this->imageList = $imageList;
        return $this;
    }


}

