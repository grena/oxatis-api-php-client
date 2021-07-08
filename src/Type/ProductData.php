<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductEntity
     */
    protected $Product;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductEntity
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductEntity $Product
     * @return ProductData
     */
    public function withProduct($Product)
    {
        $new = clone $this;
        $new->Product = $Product;

        return $new;
    }


}

