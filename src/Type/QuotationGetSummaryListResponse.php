<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\ResultInterface;

class QuotationGetSummaryListResponse implements ResultInterface
{

    /**
     * @var
     * \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfQuotationSummaryListDataQuotationSummaryListEntity
     */
    private $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfQuotationSummaryListDataQuotationSummaryListEntity
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfQuotationSummaryListDataQuotationSummaryListEntity $DataResultService
     * @return QuotationGetSummaryListResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

