<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrderUpdateValidation implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderValidateEntity
     */
    protected $OrderValidate;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderValidateEntity $OrderValidate
     */
    public function __construct($WSIdentitySoap, $OrderValidate)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->OrderValidate = $OrderValidate;
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
     * @return OrderUpdateValidation
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderValidateEntity
     */
    public function getOrderValidate()
    {
        return $this->OrderValidate;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderValidateEntity $OrderValidate
     * @return OrderUpdateValidation
     */
    public function withOrderValidate($OrderValidate)
    {
        $new = clone $this;
        $new->OrderValidate = $OrderValidate;

        return $new;
    }


}

