<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SalesRepIdEntity
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Email;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return SalesRepIdEntity
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return SalesRepIdEntity
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }


}

