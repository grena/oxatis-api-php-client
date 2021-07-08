<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UserUpdateBillingAddress implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    protected $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserEntity
     */
    protected $User;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\UserEntity $User
     */
    public function __construct($WSIdentitySoap, $User)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->User = $User;
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
     * @return UserUpdateBillingAddress
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserEntity
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserEntity $User
     * @return UserUpdateBillingAddress
     */
    public function withUser($User)
    {
        $new = clone $this;
        $new->User = $User;

        return $new;
    }


}

