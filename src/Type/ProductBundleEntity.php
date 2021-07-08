<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductBundleEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductBundledItemEntity
     */
    protected $BundledItems;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductBundledItemEntity
     */
    public function getBundledItems()
    {
        return $this->BundledItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductBundledItemEntity $BundledItems
     * @return ProductBundleEntity
     */
    public function withBundledItems($BundledItems)
    {
        $new = clone $this;
        $new->BundledItems = $BundledItems;

        return $new;
    }


}

