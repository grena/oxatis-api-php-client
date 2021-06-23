<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPackagingPerPriceEntity
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
     * @return ProductPackagingPerPriceEntity
     */
    public function withPriceIndex($PriceIndex)
    {
        $new = clone $this;
        $new->PriceIndex = $PriceIndex;

        return $new;
    }


}

