<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class PaymentTypeGet implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity
     */
    private $PaymentType;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity $PaymentType
     */
    public function __construct($WSIdentitySoap, $PaymentType)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->PaymentType = $PaymentType;
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
     * @return PaymentTypeGet
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity $PaymentType
     * @return PaymentTypeGet
     */
    public function withPaymentType($PaymentType)
    {
        $new = clone $this;
        $new->PaymentType = $PaymentType;

        return $new;
    }


}

