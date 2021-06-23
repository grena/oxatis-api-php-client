<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicEntity
{

    /**
     * @var bool
     */
    private $SupportAllLanguages;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $SysName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfString
     */
    private $Values;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfString
     */
    private $ValueCodes;

    /**
     * @return bool
     */
    public function getSupportAllLanguages()
    {
        return $this->SupportAllLanguages;
    }

    /**
     * @param bool $SupportAllLanguages
     * @return CharacteristicEntity
     */
    public function withSupportAllLanguages($SupportAllLanguages)
    {
        $new = clone $this;
        $new->SupportAllLanguages = $SupportAllLanguages;

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
     * @return CharacteristicEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getSysName()
    {
        return $this->SysName;
    }

    /**
     * @param string $SysName
     * @return CharacteristicEntity
     */
    public function withSysName($SysName)
    {
        $new = clone $this;
        $new->SysName = $SysName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfString
     */
    public function getValues()
    {
        return $this->Values;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfString $Values
     * @return CharacteristicEntity
     */
    public function withValues($Values)
    {
        $new = clone $this;
        $new->Values = $Values;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfString
     */
    public function getValueCodes()
    {
        return $this->ValueCodes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfString $ValueCodes
     * @return CharacteristicEntity
     */
    public function withValueCodes($ValueCodes)
    {
        $new = clone $this;
        $new->ValueCodes = $ValueCodes;

        return $new;
    }


}

