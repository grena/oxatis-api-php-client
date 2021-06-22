<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductBundleEntityType
 *
 *
 * XSD Type: ProductBundleEntity
 */
class ProductBundleEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductBundledItemEntityType[] $bundledItems
     */
    private $bundledItems = null;

    /**
     * Adds as bundledItem
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductBundledItemEntityType $bundledItem
     */
    public function addToBundledItems(ProductBundledItemEntityType $bundledItem)
    {
        $this->bundledItems[] = $bundledItem;
        return $this;
    }

    /**
     * isset bundledItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBundledItems($index)
    {
        return isset($this->bundledItems[$index]);
    }

    /**
     * unset bundledItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBundledItems($index)
    {
        unset($this->bundledItems[$index]);
    }

    /**
     * Gets as bundledItems
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductBundledItemEntityType[]
     */
    public function getBundledItems()
    {
        return $this->bundledItems;
    }

    /**
     * Sets a new bundledItems
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductBundledItemEntityType[] $bundledItems
     * @return self
     */
    public function setBundledItems(array $bundledItems)
    {
        $this->bundledItems = $bundledItems;
        return $this;
    }


}

