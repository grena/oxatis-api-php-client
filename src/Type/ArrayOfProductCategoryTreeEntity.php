<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfProductCategoryTreeEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeEntity
     */
    protected $ChildCategory;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->ChildCategory) ? $this->ChildCategory : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeEntity $ChildCategory
     * @return ArrayOfProductCategoryTreeEntity
     */
    public function withChildCategory($ChildCategory)
    {
        $new = clone $this;
        $new->ChildCategory = $ChildCategory;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductCategoryTreeEntity
     */
    public function getChildCategory()
    {
        return $this->ChildCategory;
    }


}

