<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\RequestInterface;

class UserGetList implements RequestInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap
     */
    private $WSIdentitySoap;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserListEntity
     */
    private $UserList;

    /**
     * Constructor
     *
     * @var \Heavymind\Oxatis\ApiClient\Type\WSIdentitySoap $WSIdentitySoap
     * @var \Heavymind\Oxatis\ApiClient\Type\UserListEntity $UserList
     */
    public function __construct($WSIdentitySoap, $UserList)
    {
        $this->WSIdentitySoap = $WSIdentitySoap;
        $this->UserList = $UserList;
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
     * @return UserGetList
     */
    public function withWSIdentitySoap($WSIdentitySoap)
    {
        $new = clone $this;
        $new->WSIdentitySoap = $WSIdentitySoap;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserListEntity
     */
    public function getUserList()
    {
        return $this->UserList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserListEntity $UserList
     * @return UserGetList
     */
    public function withUserList($UserList)
    {
        $new = clone $this;
        $new->UserList = $UserList;

        return $new;
    }


}

