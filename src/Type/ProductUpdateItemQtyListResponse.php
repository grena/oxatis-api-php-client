<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProductUpdateItemQtyListResponse implements ResultInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SummaryListResultService
     */
    protected $SummaryListResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SummaryListResultService
     */
    public function getSummaryListResultService()
    {
        return $this->SummaryListResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SummaryListResultService $SummaryListResultService
     * @return ProductUpdateItemQtyListResponse
     */
    public function withSummaryListResultService($SummaryListResultService)
    {
        $new = clone $this;
        $new->SummaryListResultService = $SummaryListResultService;

        return $new;
    }


}

