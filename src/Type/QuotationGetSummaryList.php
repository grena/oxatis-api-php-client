<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class QuotationGetSummaryList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListEntity
     */
    protected $QuotationSummaryList;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListEntity $QuotationSummaryList
     */
    public function __construct($WSIdentitySoap, $QuotationSummaryList)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->QuotationSummaryList = $QuotationSummaryList;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    public function getWSIdentitySoap()
    {
        return $this->WSIdentitySoap;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @return QuotationGetSummaryList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListEntity
     */
    public function getQuotationSummaryList()
    {
        return $this->QuotationSummaryList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryListEntity $QuotationSummaryList
     * @return QuotationGetSummaryList
     */
    public function withQuotationSummaryList($QuotationSummaryList)
    {
        $new = clone $this;
        $new->QuotationSummaryList = $QuotationSummaryList;

        return $new;
    }


}

