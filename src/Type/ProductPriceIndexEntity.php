<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPriceIndexEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var int
     */
    protected $PriceIndex;

    /**
     * @return int
     */
    public function getPriceIndex()
    {
        return $this->PriceIndex;
    }

    /**
     * @param int $PriceIndex
     * @return ProductPriceIndexEntity
     */
    public function withPriceIndex($PriceIndex)
    {
        $new = clone $this;
        $new->PriceIndex = $PriceIndex;

        return $new;
    }


}

