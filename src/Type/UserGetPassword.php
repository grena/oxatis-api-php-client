<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class UserGetPassword implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    private $UserId;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntity $UserId
     */
    public function __construct($WSIdentitySoap, $UserId)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->UserId = $UserId;
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
     * @return UserGetPassword
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntity $UserId
     * @return UserGetPassword
     */
    public function withUserId($UserId)
    {
        $new = clone $this;
        $new->UserId = $UserId;

        return $new;
    }


}

