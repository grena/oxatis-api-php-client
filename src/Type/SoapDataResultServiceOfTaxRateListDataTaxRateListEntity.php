<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfTaxRateListDataTaxRateListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRateListData
     */
    private $Data;

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

