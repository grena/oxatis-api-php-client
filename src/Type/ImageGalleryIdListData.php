<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryIdListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ImageGalleryListEntity
     */
    private $ImageGalleryIdList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ImageGalleryListEntity
     */
    public function getImageGalleryIdList()
    {
        return $this->ImageGalleryIdList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ImageGalleryListEntity $ImageGalleryIdList
     * @return ImageGalleryIdListData
     */
    public function withImageGalleryIdList($ImageGalleryIdList)
    {
        $new = clone $this;
        $new->ImageGalleryIdList = $ImageGalleryIdList;

        return $new;
    }


}

