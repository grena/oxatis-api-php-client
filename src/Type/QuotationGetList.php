<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class QuotationGetList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationListEntity
     */
    protected $QuotationList;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationListEntity $QuotationList
     */
    public function __construct($WSIdentitySoap, $QuotationList)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->QuotationList = $QuotationList;
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
     * @return QuotationGetList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationListEntity
     */
    public function getQuotationList()
    {
        return $this->QuotationList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationListEntity $QuotationList
     * @return QuotationGetList
     */
    public function withQuotationList($QuotationList)
    {
        $new = clone $this;
        $new->QuotationList = $QuotationList;

        return $new;
    }


}

