<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class PaymentTypeEntity
{

    /**
     * @var string
     */
    private $NameFR;

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
    private $NameIT;

    /**
     * @var string
     */
    private $NameNL;

    /**
     * @var string
     */
    private $NameDE;

    /**
     * @var string
     */
    private $NameCA;

    /**
     * @var string
     */
    private $NamePT;

    /**
     * @return string
     */
    public function getNameFR()
    {
        return $this->NameFR;
    }

    /**
     * @param string $NameFR
     * @return PaymentTypeEntity
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
    public function getNameEN()
    {
        return $this->NameEN;
    }

    /**
     * @param string $NameEN
     * @return PaymentTypeEntity
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
     * @return PaymentTypeEntity
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
    public function getNameIT()
    {
        return $this->NameIT;
    }

    /**
     * @param string $NameIT
     * @return PaymentTypeEntity
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
     * @return PaymentTypeEntity
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
    public function getNameDE()
    {
        return $this->NameDE;
    }

    /**
     * @param string $NameDE
     * @return PaymentTypeEntity
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
    public function getNameCA()
    {
        return $this->NameCA;
    }

    /**
     * @param string $NameCA
     * @return PaymentTypeEntity
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
    public function getNamePT()
    {
        return $this->NamePT;
    }

    /**
     * @param string $NamePT
     * @return PaymentTypeEntity
     */
    public function withNamePT($NamePT)
    {
        $new = clone $this;
        $new->NamePT = $NamePT;

        return $new;
    }


}

