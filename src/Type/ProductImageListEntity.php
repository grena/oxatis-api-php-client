<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductImageListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfImagesListEntity
     */
    private $ImageList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfImagesListEntity
     */
    public function getImageList()
    {
        return $this->ImageList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfImagesListEntity $ImageList
     * @return ProductImageListEntity
     */
    public function withImageList($ImageList)
    {
        $new = clone $this;
        $new->ImageList = $ImageList;

        return $new;
    }


}

