<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuotationSummaryListEntityType
 *
 *
 * XSD Type: QuotationSummaryListEntity
 */
class QuotationSummaryListEntityType extends QuotationListHeaderEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType[] $quotationSummaries
     */
    private $quotationSummaries = null;

    /**
     * Adds as quotationSummary
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType $quotationSummary
     */
    public function addToQuotationSummaries(QuotationSummaryEntityType $quotationSummary)
    {
        $this->quotationSummaries[] = $quotationSummary;
        return $this;
    }

    /**
     * isset quotationSummaries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuotationSummaries($index)
    {
        return isset($this->quotationSummaries[$index]);
    }

    /**
     * unset quotationSummaries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuotationSummaries($index)
    {
        unset($this->quotationSummaries[$index]);
    }

    /**
     * Gets as quotationSummaries
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType[]
     */
    public function getQuotationSummaries()
    {
        return $this->quotationSummaries;
    }

    /**
     * Sets a new quotationSummaries
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType[] $quotationSummaries
     * @return self
     */
    public function setQuotationSummaries(array $quotationSummaries)
    {
        $this->quotationSummaries = $quotationSummaries;
        return $this;
    }


}

