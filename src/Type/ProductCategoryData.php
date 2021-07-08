<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductCategoryData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductCategoryEntity
     */
    protected $ProductCategory;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductCategoryEntity
     */
    public function getProductCategory()
    {
        return $this->ProductCategory;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductCategoryEntity $ProductCategory
     * @return ProductCategoryData
     */
    public function withProductCategory($ProductCategory)
    {
        $new = clone $this;
        $new->ProductCategory = $ProductCategory;

        return $new;
    }


}

