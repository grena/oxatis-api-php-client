<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfQuotationSummaryListDataQuotationSummaryListEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListData $Data
     * @return SoapDataResultServiceOfQuotationSummaryListDataQuotationSummaryListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

