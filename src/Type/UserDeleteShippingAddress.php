<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class UserDeleteShippingAddress implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserAddressIdEntity
     */
    private $UserShippingAddressId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\UserAddressIdEntity $UserShippingAddressId
     */
    public function __construct($WSIdentitySoap, $UserShippingAddressId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->UserShippingAddressId = $UserShippingAddressId;
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
     * @return UserDeleteShippingAddress
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserAddressIdEntity
     */
    public function getUserShippingAddressId()
    {
        return $this->UserShippingAddressId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserAddressIdEntity $UserShippingAddressId
     * @return UserDeleteShippingAddress
     */
    public function withUserShippingAddressId($UserShippingAddressId)
    {
        $new = clone $this;
        $new->UserShippingAddressId = $UserShippingAddressId;

        return $new;
    }


}

