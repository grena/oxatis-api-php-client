<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ShippingTypeDelete implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeIdEntity
     */
    private $ShippingTypeId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\ShippingTypeIdEntity $ShippingTypeId
     */
    public function __construct($WSIdentitySoap, $ShippingTypeId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->ShippingTypeId = $ShippingTypeId;
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
     * @return ShippingTypeDelete
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ShippingTypeIdEntity
     */
    public function getShippingTypeId()
    {
        return $this->ShippingTypeId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ShippingTypeIdEntity $ShippingTypeId
     * @return ShippingTypeDelete
     */
    public function withShippingTypeId($ShippingTypeId)
    {
        $new = clone $this;
        $new->ShippingTypeId = $ShippingTypeId;

        return $new;
    }


}

