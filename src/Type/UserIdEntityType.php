<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing UserIdEntityType
 *
 *
 * XSD Type: UserIdEntity
 */
class UserIdEntityType extends OxatisEntityType
{

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


}

