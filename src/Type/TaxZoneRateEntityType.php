<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing TaxZoneRateEntityType
 *
 *
 * XSD Type: TaxZoneRateEntity
 */
class TaxZoneRateEntityType extends OxatisEntityType
{

    /**
     * @var string $nameDE
     */
    private $nameDE = null;

    /**
     * @var string $nameEN
     */
    private $nameEN = null;

    /**
     * @var string $nameES
     */
    private $nameES = null;

    /**
     * @var string $nameFR
     */
    private $nameFR = null;

    /**
     * @var string $nameIT
     */
    private $nameIT = null;

    /**
     * @var string $nameNL
     */
    private $nameNL = null;

    /**
     * @var string $nameCA
     */
    private $nameCA = null;

    /**
     * @var string $namePT
     */
    private $namePT = null;

    /**
     * @var float $taxRate
     */
    private $taxRate = null;

    /**
     * @var string $countryISOCode
     */
    private $countryISOCode = null;

    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var int $zipCodeFilterType
     */
    private $zipCodeFilterType = null;

    /**
     * @var string $zipCodeFilterRule
     */
    private $zipCodeFilterRule = null;

    /**
     * @var int $zipCodeFilterMin
     */
    private $zipCodeFilterMin = null;

    /**
     * @var int $zipCodeFilterMax
     */
    private $zipCodeFilterMax = null;

    /**
     * @var int $weight
     */
    private $weight = null;

    /**
     * Gets as nameDE
     *
     * @return string
     */
    public function getNameDE()
    {
        return $this->nameDE;
    }

    /**
     * Sets a new nameDE
     *
     * @param string $nameDE
     * @return self
     */
    public function setNameDE($nameDE)
    {
        $this->nameDE = $nameDE;
        return $this;
    }

    /**
     * Gets as nameEN
     *
     * @return string
     */
    public function getNameEN()
    {
        return $this->nameEN;
    }

    /**
     * Sets a new nameEN
     *
     * @param string $nameEN
     * @return self
     */
    public function setNameEN($nameEN)
    {
        $this->nameEN = $nameEN;
        return $this;
    }

    /**
     * Gets as nameES
     *
     * @return string
     */
    public function getNameES()
    {
        return $this->nameES;
    }

    /**
     * Sets a new nameES
     *
     * @param string $nameES
     * @return self
     */
    public function setNameES($nameES)
    {
        $this->nameES = $nameES;
        return $this;
    }

    /**
     * Gets as nameFR
     *
     * @return string
     */
    public function getNameFR()
    {
        return $this->nameFR;
    }

    /**
     * Sets a new nameFR
     *
     * @param string $nameFR
     * @return self
     */
    public function setNameFR($nameFR)
    {
        $this->nameFR = $nameFR;
        return $this;
    }

    /**
     * Gets as nameIT
     *
     * @return string
     */
    public function getNameIT()
    {
        return $this->nameIT;
    }

    /**
     * Sets a new nameIT
     *
     * @param string $nameIT
     * @return self
     */
    public function setNameIT($nameIT)
    {
        $this->nameIT = $nameIT;
        return $this;
    }

    /**
     * Gets as nameNL
     *
     * @return string
     */
    public function getNameNL()
    {
        return $this->nameNL;
    }

    /**
     * Sets a new nameNL
     *
     * @param string $nameNL
     * @return self
     */
    public function setNameNL($nameNL)
    {
        $this->nameNL = $nameNL;
        return $this;
    }

    /**
     * Gets as nameCA
     *
     * @return string
     */
    public function getNameCA()
    {
        return $this->nameCA;
    }

    /**
     * Sets a new nameCA
     *
     * @param string $nameCA
     * @return self
     */
    public function setNameCA($nameCA)
    {
        $this->nameCA = $nameCA;
        return $this;
    }

    /**
     * Gets as namePT
     *
     * @return string
     */
    public function getNamePT()
    {
        return $this->namePT;
    }

    /**
     * Sets a new namePT
     *
     * @param string $namePT
     * @return self
     */
    public function setNamePT($namePT)
    {
        $this->namePT = $namePT;
        return $this;
    }

    /**
     * Gets as taxRate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Sets a new taxRate
     *
     * @param float $taxRate
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
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
     * Gets as zipCodeFilterType
     *
     * @return int
     */
    public function getZipCodeFilterType()
    {
        return $this->zipCodeFilterType;
    }

    /**
     * Sets a new zipCodeFilterType
     *
     * @param int $zipCodeFilterType
     * @return self
     */
    public function setZipCodeFilterType($zipCodeFilterType)
    {
        $this->zipCodeFilterType = $zipCodeFilterType;
        return $this;
    }

    /**
     * Gets as zipCodeFilterRule
     *
     * @return string
     */
    public function getZipCodeFilterRule()
    {
        return $this->zipCodeFilterRule;
    }

    /**
     * Sets a new zipCodeFilterRule
     *
     * @param string $zipCodeFilterRule
     * @return self
     */
    public function setZipCodeFilterRule($zipCodeFilterRule)
    {
        $this->zipCodeFilterRule = $zipCodeFilterRule;
        return $this;
    }

    /**
     * Gets as zipCodeFilterMin
     *
     * @return int
     */
    public function getZipCodeFilterMin()
    {
        return $this->zipCodeFilterMin;
    }

    /**
     * Sets a new zipCodeFilterMin
     *
     * @param int $zipCodeFilterMin
     * @return self
     */
    public function setZipCodeFilterMin($zipCodeFilterMin)
    {
        $this->zipCodeFilterMin = $zipCodeFilterMin;
        return $this;
    }

    /**
     * Gets as zipCodeFilterMax
     *
     * @return int
     */
    public function getZipCodeFilterMax()
    {
        return $this->zipCodeFilterMax;
    }

    /**
     * Sets a new zipCodeFilterMax
     *
     * @param int $zipCodeFilterMax
     * @return self
     */
    public function setZipCodeFilterMax($zipCodeFilterMax)
    {
        $this->zipCodeFilterMax = $zipCodeFilterMax;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

