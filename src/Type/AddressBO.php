<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class AddressBO
{

    /**
     * @var string
     */
    private $Floor;

    /**
     * @var string
     */
    private $Building;

    /**
     * @var string
     */
    private $Street;

    /**
     * @var string
     */
    private $OtherInfo;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $CountryISOCode;

    /**
     * @var string
     */
    private $State;

    /**
     * @var string
     */
    private $ZipCode;

    /**
     * @return string
     */
    public function getFloor()
    {
        return $this->Floor;
    }

    /**
     * @param string $Floor
     * @return AddressBO
     */
    public function withFloor($Floor)
    {
        $new = clone $this;
        $new->Floor = $Floor;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->Building;
    }

    /**
     * @param string $Building
     * @return AddressBO
     */
    public function withBuilding($Building)
    {
        $new = clone $this;
        $new->Building = $Building;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return AddressBO
     */
    public function withStreet($Street)
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return string
     */
    public function getOtherInfo()
    {
        return $this->OtherInfo;
    }

    /**
     * @param string $OtherInfo
     * @return AddressBO
     */
    public function withOtherInfo($OtherInfo)
    {
        $new = clone $this;
        $new->OtherInfo = $OtherInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return AddressBO
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryISOCode()
    {
        return $this->CountryISOCode;
    }

    /**
     * @param string $CountryISOCode
     * @return AddressBO
     */
    public function withCountryISOCode($CountryISOCode)
    {
        $new = clone $this;
        $new->CountryISOCode = $CountryISOCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return AddressBO
     */
    public function withState($State)
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return AddressBO
     */
    public function withZipCode($ZipCode)
    {
        $new = clone $this;
        $new->ZipCode = $ZipCode;

        return $new;
    }


}

