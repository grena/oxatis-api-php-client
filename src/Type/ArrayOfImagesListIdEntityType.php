<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfImagesListIdEntityType
 *
 *
 * XSD Type: ArrayOfImagesListIdEntity
 */
class ArrayOfImagesListIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $imagesListIdEntity
     */
    private $imagesListIdEntity = [
        
    ];

    /**
     * Adds as imagesListIdEntity
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType $imagesListIdEntity
     */
    public function addToImagesListIdEntity(ImagesListIdEntityType $imagesListIdEntity)
    {
        $this->imagesListIdEntity[] = $imagesListIdEntity;
        return $this;
    }

    /**
     * isset imagesListIdEntity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImagesListIdEntity($index)
    {
        return isset($this->imagesListIdEntity[$index]);
    }

    /**
     * unset imagesListIdEntity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImagesListIdEntity($index)
    {
        unset($this->imagesListIdEntity[$index]);
    }

    /**
     * Gets as imagesListIdEntity
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[]
     */
    public function getImagesListIdEntity()
    {
        return $this->imagesListIdEntity;
    }

    /**
     * Sets a new imagesListIdEntity
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ImagesListIdEntityType[] $imagesListIdEntity
     * @return self
     */
    public function setImagesListIdEntity(array $imagesListIdEntity = null)
    {
        $this->imagesListIdEntity = $imagesListIdEntity;
        return $this;
    }


}

