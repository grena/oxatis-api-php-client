<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfQuotationListDataQuotationListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationListData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationListData $Data
     * @return SoapDataResultServiceOfQuotationListDataQuotationListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

