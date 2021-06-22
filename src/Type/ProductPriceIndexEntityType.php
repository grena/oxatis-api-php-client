<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductPriceIndexEntityType
 *
 *
 * XSD Type: ProductPriceIndexEntity
 */
class ProductPriceIndexEntityType extends OxatisEntityType
{

    /**
     * @var int $priceIndex
     */
    private $priceIndex = null;

    /**
     * Gets as priceIndex
     *
     * @return int
     */
    public function getPriceIndex()
    {
        return $this->priceIndex;
    }

    /**
     * Sets a new priceIndex
     *
     * @param int $priceIndex
     * @return self
     */
    public function setPriceIndex($priceIndex)
    {
        $this->priceIndex = $priceIndex;
        return $this;
    }


}

