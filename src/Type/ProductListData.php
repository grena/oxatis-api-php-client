<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductListEntity
     */
    private $ProductList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductListEntity
     */
    public function getProductList()
    {
        return $this->ProductList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductListEntity $ProductList
     * @return ProductListData
     */
    public function withProductList($ProductList)
    {
        $new = clone $this;
        $new->ProductList = $ProductList;

        return $new;
    }


}

