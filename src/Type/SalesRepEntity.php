<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SalesRepEntity
{

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return SalesRepEntity
     */
    public function withFirstName($FirstName)
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return SalesRepEntity
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }


}

