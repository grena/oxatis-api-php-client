<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductCategoryTreeCollectionData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeCollectionEntity
     */
    protected $ProductCategoryTreeCollection;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeCollectionEntity
     */
    public function getProductCategoryTreeCollection()
    {
        return $this->ProductCategoryTreeCollection;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeCollectionEntity $ProductCategoryTreeCollection
     * @return ProductCategoryTreeCollectionData
     */
    public function withProductCategoryTreeCollection($ProductCategoryTreeCollection)
    {
        $new = clone $this;
        $new->ProductCategoryTreeCollection = $ProductCategoryTreeCollection;

        return $new;
    }


}

