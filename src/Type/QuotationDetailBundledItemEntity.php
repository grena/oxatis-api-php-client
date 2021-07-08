<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationDetailBundledItemEntity extends \Heavymind\Oxatis\ApiClient\Type\QuotationDetailBundledItemsBaseEntity
{

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return QuotationDetailBundledItemEntity
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }


}

