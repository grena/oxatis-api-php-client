<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductImageListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductImageListEntity
     */
    protected $ProductImageList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductImageListEntity
     */
    public function getProductImageList()
    {
        return $this->ProductImageList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductImageListEntity $ProductImageList
     * @return ProductImageListData
     */
    public function withProductImageList($ProductImageList)
    {
        $new = clone $this;
        $new->ProductImageList = $ProductImageList;

        return $new;
    }


}

