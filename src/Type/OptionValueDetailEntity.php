<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionValueDetailEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $NameCA;

    /**
     * @var string
     */
    protected $NameDE;

    /**
     * @var string
     */
    protected $NameEN;

    /**
     * @var string
     */
    protected $NameES;

    /**
     * @var string
     */
    protected $NameFR;

    /**
     * @var string
     */
    protected $NameIT;

    /**
     * @var string
     */
    protected $NameNL;

    /**
     * @var string
     */
    protected $NamePT;

    /**
     * @var string
     */
    protected $SystemName;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return OptionValueDetailEntity
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
    public function getNameCA()
    {
        return $this->NameCA;
    }

    /**
     * @param string $NameCA
     * @return OptionValueDetailEntity
     */
    public function withNameCA($NameCA)
    {
        $new = clone $this;
        $new->NameCA = $NameCA;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameDE()
    {
        return $this->NameDE;
    }

    /**
     * @param string $NameDE
     * @return OptionValueDetailEntity
     */
    public function withNameDE($NameDE)
    {
        $new = clone $this;
        $new->NameDE = $NameDE;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameEN()
    {
        return $this->NameEN;
    }

    /**
     * @param string $NameEN
     * @return OptionValueDetailEntity
     */
    public function withNameEN($NameEN)
    {
        $new = clone $this;
        $new->NameEN = $NameEN;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameES()
    {
        return $this->NameES;
    }

    /**
     * @param string $NameES
     * @return OptionValueDetailEntity
     */
    public function withNameES($NameES)
    {
        $new = clone $this;
        $new->NameES = $NameES;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameFR()
    {
        return $this->NameFR;
    }

    /**
     * @param string $NameFR
     * @return OptionValueDetailEntity
     */
    public function withNameFR($NameFR)
    {
        $new = clone $this;
        $new->NameFR = $NameFR;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameIT()
    {
        return $this->NameIT;
    }

    /**
     * @param string $NameIT
     * @return OptionValueDetailEntity
     */
    public function withNameIT($NameIT)
    {
        $new = clone $this;
        $new->NameIT = $NameIT;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameNL()
    {
        return $this->NameNL;
    }

    /**
     * @param string $NameNL
     * @return OptionValueDetailEntity
     */
    public function withNameNL($NameNL)
    {
        $new = clone $this;
        $new->NameNL = $NameNL;

        return $new;
    }

    /**
     * @return string
     */
    public function getNamePT()
    {
        return $this->NamePT;
    }

    /**
     * @param string $NamePT
     * @return OptionValueDetailEntity
     */
    public function withNamePT($NamePT)
    {
        $new = clone $this;
        $new->NamePT = $NamePT;

        return $new;
    }

    /**
     * @return string
     */
    public function getSystemName()
    {
        return $this->SystemName;
    }

    /**
     * @param string $SystemName
     * @return OptionValueDetailEntity
     */
    public function withSystemName($SystemName)
    {
        $new = clone $this;
        $new->SystemName = $SystemName;

        return $new;
    }


}

