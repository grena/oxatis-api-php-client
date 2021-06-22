<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductPackagingEntityType
 *
 *
 * XSD Type: ProductPackagingEntity
 */
class ProductPackagingEntityType extends ProductPackagingPerPriceEntityType
{

    /**
     * @var string $defaultPackagingName
     */
    private $defaultPackagingName = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntityType[] $productPackagingItem
     */
    private $productPackagingItem = [
        
    ];

    /**
     * Gets as defaultPackagingName
     *
     * @return string
     */
    public function getDefaultPackagingName()
    {
        return $this->defaultPackagingName;
    }

    /**
     * Sets a new defaultPackagingName
     *
     * @param string $defaultPackagingName
     * @return self
     */
    public function setDefaultPackagingName($defaultPackagingName)
    {
        $this->defaultPackagingName = $defaultPackagingName;
        return $this;
    }

    /**
     * Adds as productPackagingItem
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntityType $productPackagingItem
     */
    public function addToProductPackagingItem(ProductPackagingItemEntityType $productPackagingItem)
    {
        $this->productPackagingItem[] = $productPackagingItem;
        return $this;
    }

    /**
     * isset productPackagingItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductPackagingItem($index)
    {
        return isset($this->productPackagingItem[$index]);
    }

    /**
     * unset productPackagingItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductPackagingItem($index)
    {
        unset($this->productPackagingItem[$index]);
    }

    /**
     * Gets as productPackagingItem
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntityType[]
     */
    public function getProductPackagingItem()
    {
        return $this->productPackagingItem;
    }

    /**
     * Sets a new productPackagingItem
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntityType[] $productPackagingItem
     * @return self
     */
    public function setProductPackagingItem(array $productPackagingItem)
    {
        $this->productPackagingItem = $productPackagingItem;
        return $this;
    }


}

