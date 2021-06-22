<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuotationDetailEntityType
 *
 *
 * XSD Type: QuotationDetailEntity
 */
class QuotationDetailEntityType extends QuotationDetailBaseEntityType
{

    /**
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemEntityType[] $bundledItems
     */
    private $bundledItems = null;

    /**
     * @var int $packagingQty
     */
    private $packagingQty = null;

    /**
     * Gets as quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as bundledItem
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemEntityType $bundledItem
     */
    public function addToBundledItems(QuotationDetailBundledItemEntityType $bundledItem)
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
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemEntityType[]
     */
    public function getBundledItems()
    {
        return $this->bundledItems;
    }

    /**
     * Sets a new bundledItems
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemEntityType[] $bundledItems
     * @return self
     */
    public function setBundledItems(array $bundledItems)
    {
        $this->bundledItems = $bundledItems;
        return $this;
    }

    /**
     * Gets as packagingQty
     *
     * @return int
     */
    public function getPackagingQty()
    {
        return $this->packagingQty;
    }

    /**
     * Sets a new packagingQty
     *
     * @param int $packagingQty
     * @return self
     */
    public function setPackagingQty($packagingQty)
    {
        $this->packagingQty = $packagingQty;
        return $this;
    }


}

