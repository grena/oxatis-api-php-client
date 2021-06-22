<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing SalesRepIdEntityType
 *
 *
 * XSD Type: SalesRepIdEntity
 */
class SalesRepIdEntityType extends OxatisEntityType
{

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

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

