<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductBundleEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfProductBundledItemEntity
     */
    private $BundledItems;

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

