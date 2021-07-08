<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class AccountSetting
{

    /**
     * @var string
     */
    protected $CurrencySymbol;

    /**
     * @var int
     */
    protected $CurrencyCode;

    /**
     * @var string
     */
    protected $CurrencyName;

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return AccountSetting
     */
    public function withCurrencySymbol($CurrencySymbol)
    {
        $new = clone $this;
        $new->CurrencySymbol = $CurrencySymbol;

        return $new;
    }

    /**
     * @return int
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param int $CurrencyCode
     * @return AccountSetting
     */
    public function withCurrencyCode($CurrencyCode)
    {
        $new = clone $this;
        $new->CurrencyCode = $CurrencyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->CurrencyName;
    }

    /**
     * @param string $CurrencyName
     * @return AccountSetting
     */
    public function withCurrencyName($CurrencyName)
    {
        $new = clone $this;
        $new->CurrencyName = $CurrencyName;

        return $new;
    }


}

