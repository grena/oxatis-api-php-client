<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfQuotationSummaryEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntity
     */
    protected $QuotationSummary;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->QuotationSummary) ? $this->QuotationSummary : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntity $QuotationSummary
     * @return ArrayOfQuotationSummaryEntity
     */
    public function withQuotationSummary($QuotationSummary)
    {
        $new = clone $this;
        $new->QuotationSummary = $QuotationSummary;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntity
     */
    public function getQuotationSummary()
    {
        return $this->QuotationSummary;
    }


}

