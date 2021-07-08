<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaxRateEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var string
     */
    protected $CountryName;

    /**
     * @var string
     */
    protected $CountryISOCode;

    /**
     * @var int
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var float
     */
    protected $Value;

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return TaxRateEntity
     */
    public function withCountryName($CountryName)
    {
        $new = clone $this;
        $new->CountryName = $CountryName;

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
     * @return TaxRateEntity
     */
    public function withCountryISOCode($CountryISOCode)
    {
        $new = clone $this;
        $new->CountryISOCode = $CountryISOCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TaxRateEntity
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return TaxRateEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param float $Value
     * @return TaxRateEntity
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }


}

