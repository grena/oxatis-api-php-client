<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfOrderDetailBundledItemEntityType
 *
 *
 * XSD Type: ArrayOfOrderDetailBundledItemEntity
 */
class ArrayOfOrderDetailBundledItemEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderDetailBundledItemEntityType[] $bundledItem
     */
    private $bundledItem = [
        
    ];

    /**
     * Adds as bundledItem
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailBundledItemEntityType $bundledItem
     */
    public function addToBundledItem(OrderDetailBundledItemEntityType $bundledItem)
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
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderDetailBundledItemEntityType[]
     */
    public function getBundledItem()
    {
        return $this->bundledItem;
    }

    /**
     * Sets a new bundledItem
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderDetailBundledItemEntityType[] $bundledItem
     * @return self
     */
    public function setBundledItem(array $bundledItem = null)
    {
        $this->bundledItem = $bundledItem;
        return $this;
    }


}

