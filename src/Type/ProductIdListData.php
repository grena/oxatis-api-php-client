<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductIdListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdListEntity
     */
    protected $ProductIdList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdListEntity
     */
    public function getProductIdList()
    {
        return $this->ProductIdList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdListEntity $ProductIdList
     * @return ProductIdListData
     */
    public function withProductIdList($ProductIdList)
    {
        $new = clone $this;
        $new->ProductIdList = $ProductIdList;

        return $new;
    }


}

