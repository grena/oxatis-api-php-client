<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPackagingOptionsEntity
{

    /**
     * @var bool
     */
    private $UsePackagingOptionalItems;

    /**
     * @return bool
     */
    public function getUsePackagingOptionalItems()
    {
        return $this->UsePackagingOptionalItems;
    }

    /**
     * @param bool $UsePackagingOptionalItems
     * @return ProductPackagingOptionsEntity
     */
    public function withUsePackagingOptionalItems($UsePackagingOptionalItems)
    {
        $new = clone $this;
        $new->UsePackagingOptionalItems = $UsePackagingOptionalItems;

        return $new;
    }


}

