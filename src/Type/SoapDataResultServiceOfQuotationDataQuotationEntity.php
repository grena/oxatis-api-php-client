<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfQuotationDataQuotationEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationData $Data
     * @return SoapDataResultServiceOfQuotationDataQuotationEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

