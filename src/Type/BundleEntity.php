<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class BundleEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BundledItemEntity
     */
    protected $BundledItem;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\BundledItemEntity
     */
    public function getBundledItem()
    {
        return $this->BundledItem;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\BundledItemEntity $BundledItem
     * @return BundleEntity
     */
    public function withBundledItem($BundledItem)
    {
        $new = clone $this;
        $new->BundledItem = $BundledItem;

        return $new;
    }


}

