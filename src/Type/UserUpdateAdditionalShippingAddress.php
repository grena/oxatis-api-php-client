<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class UserUpdateAdditionalShippingAddress implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserShippingAddressEntity
     */
    private $UserShippingAddress;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\UserShippingAddressEntity $UserShippingAddress
     */
    public function __construct($WSIdentitySoap, $UserShippingAddress)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->UserShippingAddress = $UserShippingAddress;
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
     * @return UserUpdateAdditionalShippingAddress
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserShippingAddressEntity
     */
    public function getUserShippingAddress()
    {
        return $this->UserShippingAddress;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserShippingAddressEntity $UserShippingAddress
     * @return UserUpdateAdditionalShippingAddress
     */
    public function withUserShippingAddress($UserShippingAddress)
    {
        $new = clone $this;
        $new->UserShippingAddress = $UserShippingAddress;

        return $new;
    }


}

