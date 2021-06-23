<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class AccountProperties
{

    /**
     * @var string
     */
    private $SiteName;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var int
     */
    private $AccountId;

    /**
     * @var int
     */
    private $LangId;

    /**
     * @var string
     */
    private $IsoLang;

    /**
     * @var string
     */
    private $CountryISOCode;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var bool
     */
    private $IsAdmin;

    /**
     * @var bool
     */
    private $IsOpenEntreprise;

    /**
     * @var int
     */
    private $CurrencyCode;

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param string $SiteName
     * @return AccountProperties
     */
    public function withSiteName($SiteName)
    {
        $new = clone $this;
        $new->SiteName = $SiteName;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return AccountProperties
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return AccountProperties
     */
    public function withAccountId($AccountId)
    {
        $new = clone $this;
        $new->AccountId = $AccountId;

        return $new;
    }

    /**
     * @return int
     */
    public function getLangId()
    {
        return $this->LangId;
    }

    /**
     * @param int $LangId
     * @return AccountProperties
     */
    public function withLangId($LangId)
    {
        $new = clone $this;
        $new->LangId = $LangId;

        return $new;
    }

    /**
     * @return string
     */
    public function getIsoLang()
    {
        return $this->IsoLang;
    }

    /**
     * @param string $IsoLang
     * @return AccountProperties
     */
    public function withIsoLang($IsoLang)
    {
        $new = clone $this;
        $new->IsoLang = $IsoLang;

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
     * @return AccountProperties
     */
    public function withCountryISOCode($CountryISOCode)
    {
        $new = clone $this;
        $new->CountryISOCode = $CountryISOCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return AccountProperties
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->IsAdmin;
    }

    /**
     * @param bool $IsAdmin
     * @return AccountProperties
     */
    public function withIsAdmin($IsAdmin)
    {
        $new = clone $this;
        $new->IsAdmin = $IsAdmin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsOpenEntreprise()
    {
        return $this->IsOpenEntreprise;
    }

    /**
     * @param bool $IsOpenEntreprise
     * @return AccountProperties
     */
    public function withIsOpenEntreprise($IsOpenEntreprise)
    {
        $new = clone $this;
        $new->IsOpenEntreprise = $IsOpenEntreprise;

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
     * @return AccountProperties
     */
    public function withCurrencyCode($CurrencyCode)
    {
        $new = clone $this;
        $new->CurrencyCode = $CurrencyCode;

        return $new;
    }


}

