<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationEntity extends \Heavymind\Oxatis\ApiClient\Type\QuotationBaseEntity
{

    /**
     * @var int
     */
    protected $TotalWeight;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationDetailEntity
     */
    protected $QuotationItems;

    /**
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }

    /**
     * @param int $TotalWeight
     * @return QuotationEntity
     */
    public function withTotalWeight($TotalWeight)
    {
        $new = clone $this;
        $new->TotalWeight = $TotalWeight;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationDetailEntity
     */
    public function getQuotationItems()
    {
        return $this->QuotationItems;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationDetailEntity $QuotationItems
     * @return QuotationEntity
     */
    public function withQuotationItems($QuotationItems)
    {
        $new = clone $this;
        $new->QuotationItems = $QuotationItems;

        return $new;
    }


}

