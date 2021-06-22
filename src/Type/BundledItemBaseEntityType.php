<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing BundledItemBaseEntityType
 *
 *
 * XSD Type: BundledItemBaseEntity
 */
class BundledItemBaseEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $productId
     */
    private $productId = null;

    /**
     * Gets as productId
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $productId
     * @return self
     */
    public function setProductId(ProductIdEntityType $productId)
    {
        $this->productId = $productId;
        return $this;
    }


}

