<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductUserPricePerPackagingEntityType
 *
 *
 * XSD Type: ProductUserPricePerPackagingEntity
 */
class ProductUserPricePerPackagingEntityType extends ProductUserIdEntityType
{

    /**
     * @var bool $disableDiscount
     */
    private $disableDiscount = null;

    /**
     * @var float $defaultPackagingPrice
     */
    private $defaultPackagingPrice = null;

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
     * Gets as disableDiscount
     *
     * @return bool
     */
    public function getDisableDiscount()
    {
        return $this->disableDiscount;
    }

    /**
     * Sets a new disableDiscount
     *
     * @param bool $disableDiscount
     * @return self
     */
    public function setDisableDiscount($disableDiscount)
    {
        $this->disableDiscount = $disableDiscount;
        return $this;
    }

    /**
     * Gets as defaultPackagingPrice
     *
     * @return float
     */
    public function getDefaultPackagingPrice()
    {
        return $this->defaultPackagingPrice;
    }

    /**
     * Sets a new defaultPackagingPrice
     *
     * @param float $defaultPackagingPrice
     * @return self
     */
    public function setDefaultPackagingPrice($defaultPackagingPrice)
    {
        $this->defaultPackagingPrice = $defaultPackagingPrice;
        return $this;
    }

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

