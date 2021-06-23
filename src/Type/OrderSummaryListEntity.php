<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderSummaryListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    private $PageInformation;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderSummaryEntity
     */
    private $OrderSummaries;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return OrderSummaryListEntity
     */
    public function withPageInformation($PageInformation)
    {
        $new = clone $this;
        $new->PageInformation = $PageInformation;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderSummaryEntity
     */
    public function getOrderSummaries()
    {
        return $this->OrderSummaries;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderSummaryEntity $OrderSummaries
     * @return OrderSummaryListEntity
     */
    public function withOrderSummaries($OrderSummaries)
    {
        $new = clone $this;
        $new->OrderSummaries = $OrderSummaries;

        return $new;
    }


}

