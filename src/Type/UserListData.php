<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UserListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserListEntity
     */
    protected $UserList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserListEntity
     */
    public function getUserList()
    {
        return $this->UserList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserListEntity $UserList
     * @return UserListData
     */
    public function withUserList($UserList)
    {
        $new = clone $this;
        $new->UserList = $UserList;

        return $new;
    }


}

