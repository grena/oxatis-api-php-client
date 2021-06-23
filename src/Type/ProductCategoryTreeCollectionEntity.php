<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductCategoryTreeCollectionEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeEntity
     */
    private $ProductCategoryTree;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeEntity
     */
    public function getProductCategoryTree()
    {
        return $this->ProductCategoryTree;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeEntity $ProductCategoryTree
     * @return ProductCategoryTreeCollectionEntity
     */
    public function withProductCategoryTree($ProductCategoryTree)
    {
        $new = clone $this;
        $new->ProductCategoryTree = $ProductCategoryTree;

        return $new;
    }


}

