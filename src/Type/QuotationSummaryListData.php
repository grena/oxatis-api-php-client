<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationSummaryListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListEntity
     */
    protected $QuotationSummaryList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListEntity
     */
    public function getQuotationSummaryList()
    {
        return $this->QuotationSummaryList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListEntity $QuotationSummaryList
     * @return QuotationSummaryListData
     */
    public function withQuotationSummaryList($QuotationSummaryList)
    {
        $new = clone $this;
        $new->QuotationSummaryList = $QuotationSummaryList;

        return $new;
    }


}

