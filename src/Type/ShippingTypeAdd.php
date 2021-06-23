<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ShippingTypeAdd implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity
     */
    private $ShippingType;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity $ShippingType
     */
    public function __construct($WSIdentitySoap, $ShippingType)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ShippingType = $ShippingType;
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
     * @return ShippingTypeAdd
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity
     */
    public function getShippingType()
    {
        return $this->ShippingType;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeEntity $ShippingType
     * @return ShippingTypeAdd
     */
    public function withShippingType($ShippingType)
    {
        $new = clone $this;
        $new->ShippingType = $ShippingType;

        return $new;
    }


}

