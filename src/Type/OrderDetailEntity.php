<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderDetailEntity extends \Heavymind\Oxatis\ApiClient\Type\OrderDetailBaseEntity
{

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * @var int
     */
    protected $PackagingQty;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderDetailBundledItemEntity
     */
    protected $BundledItems;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return OrderDetailEntity
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }

    /**
     * @return int
     */
    public function getPackagingQty()
    {
        return $this->PackagingQty;
    }

    /**
     * @param int $PackagingQty
     * @return OrderDetailEntity
     */
    public function withPackagingQty($PackagingQty)
    {
        $new = clone $this;
        $new->PackagingQty = $PackagingQty;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderDetailBundledItemEntity
     */
    public function getBundledItems()
    {
        return $this->BundledItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderDetailBundledItemEntity $BundledItems
     * @return OrderDetailEntity
     */
    public function withBundledItems($BundledItems)
    {
        $new = clone $this;
        $new->BundledItems = $BundledItems;

        return $new;
    }


}

