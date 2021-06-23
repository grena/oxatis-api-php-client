<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UserIdEntity
{

    /**
     * @var string
     */
    private $Email;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return UserIdEntity
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }


}

