<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductCategoryTreeEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductCategoryTreeEntity
     */
    private $ChildCategoryCollection;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductCategoryTreeEntity
     */
    public function getChildCategoryCollection()
    {
        return $this->ChildCategoryCollection;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductCategoryTreeEntity $ChildCategoryCollection
     * @return ProductCategoryTreeEntity
     */
    public function withChildCategoryCollection($ChildCategoryCollection)
    {
        $new = clone $this;
        $new->ChildCategoryCollection = $ChildCategoryCollection;

        return $new;
    }


}

