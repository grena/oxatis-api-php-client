<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing TaxEngineModeEntityType
 *
 *
 * XSD Type: TaxEngineModeEntity
 */
class TaxEngineModeEntityType
{

    /**
     * @var int $engineMode
     */
    private $engineMode = null;

    /**
     * @var string $defaultCountryISOCode
     */
    private $defaultCountryISOCode = null;

    /**
     * @var string $defaultState
     */
    private $defaultState = null;

    /**
     * @var string $defaultZipCode
     */
    private $defaultZipCode = null;

    /**
     * Gets as engineMode
     *
     * @return int
     */
    public function getEngineMode()
    {
        return $this->engineMode;
    }

    /**
     * Sets a new engineMode
     *
     * @param int $engineMode
     * @return self
     */
    public function setEngineMode($engineMode)
    {
        $this->engineMode = $engineMode;
        return $this;
    }

    /**
     * Gets as defaultCountryISOCode
     *
     * @return string
     */
    public function getDefaultCountryISOCode()
    {
        return $this->defaultCountryISOCode;
    }

    /**
     * Sets a new defaultCountryISOCode
     *
     * @param string $defaultCountryISOCode
     * @return self
     */
    public function setDefaultCountryISOCode($defaultCountryISOCode)
    {
        $this->defaultCountryISOCode = $defaultCountryISOCode;
        return $this;
    }

    /**
     * Gets as defaultState
     *
     * @return string
     */
    public function getDefaultState()
    {
        return $this->defaultState;
    }

    /**
     * Sets a new defaultState
     *
     * @param string $defaultState
     * @return self
     */
    public function setDefaultState($defaultState)
    {
        $this->defaultState = $defaultState;
        return $this;
    }

    /**
     * Gets as defaultZipCode
     *
     * @return string
     */
    public function getDefaultZipCode()
    {
        return $this->defaultZipCode;
    }

    /**
     * Sets a new defaultZipCode
     *
     * @param string $defaultZipCode
     * @return self
     */
    public function setDefaultZipCode($defaultZipCode)
    {
        $this->defaultZipCode = $defaultZipCode;
        return $this;
    }


}

