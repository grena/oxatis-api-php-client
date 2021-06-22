<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuotationDetailBundledItemEntityType
 *
 *
 * XSD Type: QuotationDetailBundledItemEntity
 */
class QuotationDetailBundledItemEntityType extends QuotationDetailBundledItemsBaseEntityType
{

    /**
     * @var int $quantity
     */
    private $quantity = null;

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


}

