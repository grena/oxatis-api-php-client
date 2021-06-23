<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaxRateListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfTaxRateEntity
     */
    private $TaxRateIDs;

    /**
     * @var string
     */
    private $VATCountryISOCode;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfTaxRateEntity
     */
    public function getTaxRateIDs()
    {
        return $this->TaxRateIDs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfTaxRateEntity $TaxRateIDs
     * @return TaxRateListEntity
     */
    public function withTaxRateIDs($TaxRateIDs)
    {
        $new = clone $this;
        $new->TaxRateIDs = $TaxRateIDs;

        return $new;
    }

    /**
     * @return string
     */
    public function getVATCountryISOCode()
    {
        return $this->VATCountryISOCode;
    }

    /**
     * @param string $VATCountryISOCode
     * @return TaxRateListEntity
     */
    public function withVATCountryISOCode($VATCountryISOCode)
    {
        $new = clone $this;
        $new->VATCountryISOCode = $VATCountryISOCode;

        return $new;
    }


}

