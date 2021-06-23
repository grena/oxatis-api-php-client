<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPriceIndexEntity
{

    /**
     * @var int
     */
    private $PriceIndex;

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

