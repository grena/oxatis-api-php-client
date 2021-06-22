<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductPackagingOptionsEntityType
 *
 *
 * XSD Type: ProductPackagingOptionsEntity
 */
class ProductPackagingOptionsEntityType
{

    /**
     * @var bool $usePackagingOptionalItems
     */
    private $usePackagingOptionalItems = null;

    /**
     * Gets as usePackagingOptionalItems
     *
     * @return bool
     */
    public function getUsePackagingOptionalItems()
    {
        return $this->usePackagingOptionalItems;
    }

    /**
     * Sets a new usePackagingOptionalItems
     *
     * @param bool $usePackagingOptionalItems
     * @return self
     */
    public function setUsePackagingOptionalItems($usePackagingOptionalItems)
    {
        $this->usePackagingOptionalItems = $usePackagingOptionalItems;
        return $this;
    }


}

