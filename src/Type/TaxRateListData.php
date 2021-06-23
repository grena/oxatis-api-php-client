<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaxRateListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRateListEntity
     */
    private $TaxRateList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxRateListEntity
     */
    public function getTaxRateList()
    {
        return $this->TaxRateList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRateListEntity $TaxRateList
     * @return TaxRateListData
     */
    public function withTaxRateList($TaxRateList)
    {
        $new = clone $this;
        $new->TaxRateList = $TaxRateList;

        return $new;
    }


}

