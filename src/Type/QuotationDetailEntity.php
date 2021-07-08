<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationDetailEntity extends \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBaseEntity
{

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationDetailBundledItemEntity
     */
    protected $BundledItems;

    /**
     * @var int
     */
    protected $PackagingQty;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return QuotationDetailEntity
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationDetailBundledItemEntity
     */
    public function getBundledItems()
    {
        return $this->BundledItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationDetailBundledItemEntity $BundledItems
     * @return QuotationDetailEntity
     */
    public function withBundledItems($BundledItems)
    {
        $new = clone $this;
        $new->BundledItems = $BundledItems;

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
     * @return QuotationDetailEntity
     */
    public function withPackagingQty($PackagingQty)
    {
        $new = clone $this;
        $new->PackagingQty = $PackagingQty;

        return $new;
    }


}

