<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ContactBO
{

    /**
     * @var string
     */
    private $Phone;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @var string
     */
    private $Company;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\AddressBO
     */
    private $Address;

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return ContactBO
     */
    public function withPhone($Phone)
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return ContactBO
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return ContactBO
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
     * @return ContactBO
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return ContactBO
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\AddressBO
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\AddressBO $Address
     * @return ContactBO
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }


}

