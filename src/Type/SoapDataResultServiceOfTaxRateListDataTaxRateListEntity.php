<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfTaxRateListDataTaxRateListEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRateListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxRateListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRateListData $Data
     * @return SoapDataResultServiceOfTaxRateListDataTaxRateListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

