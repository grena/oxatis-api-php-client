<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ImageGalleryListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    private $PageInformation;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfImageGalleryIdEntity
     */
    private $ImageGalleryIdList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return ImageGalleryListEntity
     */
    public function withPageInformation($PageInformation)
    {
        $new = clone $this;
        $new->PageInformation = $PageInformation;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfImageGalleryIdEntity
     */
    public function getImageGalleryIdList()
    {
        return $this->ImageGalleryIdList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfImageGalleryIdEntity $ImageGalleryIdList
     * @return ImageGalleryListEntity
     */
    public function withImageGalleryIdList($ImageGalleryIdList)
    {
        $new = clone $this;
        $new->ImageGalleryIdList = $ImageGalleryIdList;

        return $new;
    }


}

