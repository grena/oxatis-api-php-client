<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class BundleEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BundledItemEntity
     */
    private $BundledItem;

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

