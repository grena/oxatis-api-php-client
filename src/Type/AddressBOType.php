<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing AddressBOType
 *
 *
 * XSD Type: AddressBO
 */
class AddressBOType
{

    /**
     * @var string $floor
     */
    private $floor = null;

    /**
     * @var string $building
     */
    private $building = null;

    /**
     * @var string $street
     */
    private $street = null;

    /**
     * @var string $otherInfo
     */
    private $otherInfo = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $countryISOCode
     */
    private $countryISOCode = null;

    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * Gets as floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets a new floor
     *
     * @param string $floor
     * @return self
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Gets as building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Sets a new building
     *
     * @param string $building
     * @return self
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as otherInfo
     *
     * @return string
     */
    public function getOtherInfo()
    {
        return $this->otherInfo;
    }

    /**
     * Sets a new otherInfo
     *
     * @param string $otherInfo
     * @return self
     */
    public function setOtherInfo($otherInfo)
    {
        $this->otherInfo = $otherInfo;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as countryISOCode
     *
     * @return string
     */
    public function getCountryISOCode()
    {
        return $this->countryISOCode;
    }

    /**
     * Sets a new countryISOCode
     *
     * @param string $countryISOCode
     * @return self
     */
    public function setCountryISOCode($countryISOCode)
    {
        $this->countryISOCode = $countryISOCode;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }


}

