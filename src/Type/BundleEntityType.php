<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing BundleEntityType
 *
 *
 * XSD Type: BundleEntity
 */
class BundleEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BundledItemEntityType[] $bundledItem
     */
    private $bundledItem = [
        
    ];

    /**
     * Adds as bundledItem
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\BundledItemEntityType $bundledItem
     */
    public function addToBundledItem(BundledItemEntityType $bundledItem)
    {
        $this->bundledItem[] = $bundledItem;
        return $this;
    }

    /**
     * isset bundledItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBundledItem($index)
    {
        return isset($this->bundledItem[$index]);
    }

    /**
     * unset bundledItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBundledItem($index)
    {
        unset($this->bundledItem[$index]);
    }

    /**
     * Gets as bundledItem
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\BundledItemEntityType[]
     */
    public function getBundledItem()
    {
        return $this->bundledItem;
    }

    /**
     * Sets a new bundledItem
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\BundledItemEntityType[] $bundledItem
     * @return self
     */
    public function setBundledItem(array $bundledItem)
    {
        $this->bundledItem = $bundledItem;
        return $this;
    }


}

