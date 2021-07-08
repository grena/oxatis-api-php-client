<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductBundleData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductBundleEntity
     */
    protected $ProductBundle;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductBundleEntity
     */
    public function getProductBundle()
    {
        return $this->ProductBundle;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductBundleEntity $ProductBundle
     * @return ProductBundleData
     */
    public function withProductBundle($ProductBundle)
    {
        $new = clone $this;
        $new->ProductBundle = $ProductBundle;

        return $new;
    }


}

