<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductUserPricePerPackagingEntity extends \Heavymind\Oxatis\ApiClient\Type\ProductUserIdEntity
{

    /**
     * @var bool
     */
    protected $DisableDiscount;

    /**
     * @var float
     */
    protected $DefaultPackagingPrice;

    /**
     * @var string
     */
    protected $DefaultPackagingName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntity
     */
    protected $ProductPackagingItem;

    /**
     * @return bool
     */
    public function getDisableDiscount()
    {
        return $this->DisableDiscount;
    }

    /**
     * @param bool $DisableDiscount
     * @return ProductUserPricePerPackagingEntity
     */
    public function withDisableDiscount($DisableDiscount)
    {
        $new = clone $this;
        $new->DisableDiscount = $DisableDiscount;

        return $new;
    }

    /**
     * @return float
     */
    public function getDefaultPackagingPrice()
    {
        return $this->DefaultPackagingPrice;
    }

    /**
     * @param float $DefaultPackagingPrice
     * @return ProductUserPricePerPackagingEntity
     */
    public function withDefaultPackagingPrice($DefaultPackagingPrice)
    {
        $new = clone $this;
        $new->DefaultPackagingPrice = $DefaultPackagingPrice;

        return $new;
    }

    /**
     * @return string
     */
    public function getDefaultPackagingName()
    {
        return $this->DefaultPackagingName;
    }

    /**
     * @param string $DefaultPackagingName
     * @return ProductUserPricePerPackagingEntity
     */
    public function withDefaultPackagingName($DefaultPackagingName)
    {
        $new = clone $this;
        $new->DefaultPackagingName = $DefaultPackagingName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntity
     */
    public function getProductPackagingItem()
    {
        return $this->ProductPackagingItem;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntity $ProductPackagingItem
     * @return ProductUserPricePerPackagingEntity
     */
    public function withProductPackagingItem($ProductPackagingItem)
    {
        $new = clone $this;
        $new->ProductPackagingItem = $ProductPackagingItem;

        return $new;
    }


}

