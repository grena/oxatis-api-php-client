<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfCatalogAccessValueEntity implements IteratorAggregate, Traversable
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntity
     */
    private $CatalogAccessValue;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->CatalogAccessValue) ? $this->CatalogAccessValue : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntity $CatalogAccessValue
     * @return ArrayOfCatalogAccessValueEntity
     */
    public function withCatalogAccessValue($CatalogAccessValue)
    {
        $new = clone $this;
        $new->CatalogAccessValue = $CatalogAccessValue;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntity
     */
    public function getCatalogAccessValue()
    {
        return $this->CatalogAccessValue;
    }


}

