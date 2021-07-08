<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductResultData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    protected $ProductResult;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getProductResult()
    {
        return $this->ProductResult;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $ProductResult
     * @return ProductResultData
     */
    public function withProductResult($ProductResult)
    {
        $new = clone $this;
        $new->ProductResult = $ProductResult;

        return $new;
    }


}

