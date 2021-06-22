<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing CharacteristicEntityType
 *
 *
 * XSD Type: CharacteristicEntity
 */
class CharacteristicEntityType
{

    /**
     * @var bool $supportAllLanguages
     */
    private $supportAllLanguages = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $sysName
     */
    private $sysName = null;

    /**
     * @var string[] $values
     */
    private $values = null;

    /**
     * @var string[] $valueCodes
     */
    private $valueCodes = null;

    /**
     * Gets as supportAllLanguages
     *
     * @return bool
     */
    public function getSupportAllLanguages()
    {
        return $this->supportAllLanguages;
    }

    /**
     * Sets a new supportAllLanguages
     *
     * @param bool $supportAllLanguages
     * @return self
     */
    public function setSupportAllLanguages($supportAllLanguages)
    {
        $this->supportAllLanguages = $supportAllLanguages;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as sysName
     *
     * @return string
     */
    public function getSysName()
    {
        return $this->sysName;
    }

    /**
     * Sets a new sysName
     *
     * @param string $sysName
     * @return self
     */
    public function setSysName($sysName)
    {
        $this->sysName = $sysName;
        return $this;
    }

    /**
     * Adds as string
     *
     * @return self
     * @param string $string
     */
    public function addToValues($string)
    {
        $this->values[] = $string;
        return $this;
    }

    /**
     * isset values
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValues($index)
    {
        return isset($this->values[$index]);
    }

    /**
     * unset values
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValues($index)
    {
        unset($this->values[$index]);
    }

    /**
     * Gets as values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Sets a new values
     *
     * @param string[] $values
     * @return self
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }

    /**
     * Adds as string
     *
     * @return self
     * @param string $string
     */
    public function addToValueCodes($string)
    {
        $this->valueCodes[] = $string;
        return $this;
    }

    /**
     * isset valueCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueCodes($index)
    {
        return isset($this->valueCodes[$index]);
    }

    /**
     * unset valueCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueCodes($index)
    {
        unset($this->valueCodes[$index]);
    }

    /**
     * Gets as valueCodes
     *
     * @return string[]
     */
    public function getValueCodes()
    {
        return $this->valueCodes;
    }

    /**
     * Sets a new valueCodes
     *
     * @param string[] $valueCodes
     * @return self
     */
    public function setValueCodes(array $valueCodes)
    {
        $this->valueCodes = $valueCodes;
        return $this;
    }


}

