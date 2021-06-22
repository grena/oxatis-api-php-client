<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfQuotationSummaryEntityType
 *
 *
 * XSD Type: ArrayOfQuotationSummaryEntity
 */
class ArrayOfQuotationSummaryEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType[] $quotationSummary
     */
    private $quotationSummary = [
        
    ];

    /**
     * Adds as quotationSummary
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType $quotationSummary
     */
    public function addToQuotationSummary(QuotationSummaryEntityType $quotationSummary)
    {
        $this->quotationSummary[] = $quotationSummary;
        return $this;
    }

    /**
     * isset quotationSummary
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuotationSummary($index)
    {
        return isset($this->quotationSummary[$index]);
    }

    /**
     * unset quotationSummary
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuotationSummary($index)
    {
        unset($this->quotationSummary[$index]);
    }

    /**
     * Gets as quotationSummary
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType[]
     */
    public function getQuotationSummary()
    {
        return $this->quotationSummary;
    }

    /**
     * Sets a new quotationSummary
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntityType[] $quotationSummary
     * @return self
     */
    public function setQuotationSummary(array $quotationSummary = null)
    {
        $this->quotationSummary = $quotationSummary;
        return $this;
    }


}

