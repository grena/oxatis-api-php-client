<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class QuotationGetDetails implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity
     */
    private $QuotationId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity $QuotationId
     */
    public function __construct($WSIdentitySoap, $QuotationId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->QuotationId = $QuotationId;
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
     * @return QuotationGetDetails
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity
     */
    public function getQuotationId()
    {
        return $this->QuotationId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity $QuotationId
     * @return QuotationGetDetails
     */
    public function withQuotationId($QuotationId)
    {
        $new = clone $this;
        $new->QuotationId = $QuotationId;

        return $new;
    }


}

