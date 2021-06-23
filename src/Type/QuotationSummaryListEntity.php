<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationSummaryListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    private $PageInformation;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationSummaryEntity
     */
    private $QuotationSummaries;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return QuotationSummaryListEntity
     */
    public function withPageInformation($PageInformation)
    {
        $new = clone $this;
        $new->PageInformation = $PageInformation;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationSummaryEntity
     */
    public function getQuotationSummaries()
    {
        return $this->QuotationSummaries;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationSummaryEntity $QuotationSummaries
     * @return QuotationSummaryListEntity
     */
    public function withQuotationSummaries($QuotationSummaries)
    {
        $new = clone $this;
        $new->QuotationSummaries = $QuotationSummaries;

        return $new;
    }


}

