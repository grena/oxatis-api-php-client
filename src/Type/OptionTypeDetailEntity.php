<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionTypeDetailEntity
{

    /**
     * @var string
     */
    private $NameCA;

    /**
     * @var string
     */
    private $NameDE;

    /**
     * @var string
     */
    private $NameEN;

    /**
     * @var string
     */
    private $NameES;

    /**
     * @var string
     */
    private $NameFR;

    /**
     * @var string
     */
    private $NameIT;

    /**
     * @var string
     */
    private $NameNL;

    /**
     * @var string
     */
    private $NamePT;

    /**
     * @var string
     */
    private $SystemName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOptionValueDetailEntity
     */
    private $OptionValueArray;

    /**
     * @return string
     */
    public function getNameCA()
    {
        return $this->NameCA;
    }

    /**
     * @param string $NameCA
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
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
     * @return OptionTypeDetailEntity
     */
    public function withSystemName($SystemName)
    {
        $new = clone $this;
        $new->SystemName = $SystemName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOptionValueDetailEntity
     */
    public function getOptionValueArray()
    {
        return $this->OptionValueArray;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOptionValueDetailEntity $OptionValueArray
     * @return OptionTypeDetailEntity
     */
    public function withOptionValueArray($OptionValueArray)
    {
        $new = clone $this;
        $new->OptionValueArray = $OptionValueArray;

        return $new;
    }


}

