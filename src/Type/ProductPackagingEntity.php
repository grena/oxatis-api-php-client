<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPackagingEntity extends \Heavymind\Oxatis\ApiClient\Type\ProductPackagingPerPriceEntity
{

    /**
     * @var string
     */
    protected $DefaultPackagingName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductPackagingItemEntity
     */
    protected $ProductPackagingItem;

    /**
     * @return string
     */
    public function getDefaultPackagingName()
    {
        return $this->DefaultPackagingName;
    }

    /**
     * @param string $DefaultPackagingName
     * @return ProductPackagingEntity
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
     * @return ProductPackagingEntity
     */
    public function withProductPackagingItem($ProductPackagingItem)
    {
        $new = clone $this;
        $new->ProductPackagingItem = $ProductPackagingItem;

        return $new;
    }


}

