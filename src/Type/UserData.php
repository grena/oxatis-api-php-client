<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UserData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserEntity
     */
    protected $User;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserEntity
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserEntity $User
     * @return UserData
     */
    public function withUser($User)
    {
        $new = clone $this;
        $new->User = $User;

        return $new;
    }


}

