<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfProductIdEntityType
 *
 *
 * XSD Type: ArrayOfProductIdEntity
 */
class ArrayOfProductIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType[] $productID
     */
    private $productID = [
        
    ];

    /**
     * Adds as productID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $productID
     */
    public function addToProductID(ProductIdEntityType $productID)
    {
        $this->productID[] = $productID;
        return $this;
    }

    /**
     * isset productID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductID($index)
    {
        return isset($this->productID[$index]);
    }

    /**
     * unset productID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductID($index)
    {
        unset($this->productID[$index]);
    }

    /**
     * Gets as productID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType[]
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType[] $productID
     * @return self
     */
    public function setProductID(array $productID = null)
    {
        $this->productID = $productID;
        return $this;
    }


}

