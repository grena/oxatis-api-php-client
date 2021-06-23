<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationEntity
     */
    private $Quotation;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationEntity
     */
    public function getQuotation()
    {
        return $this->Quotation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationEntity $Quotation
     * @return QuotationData
     */
    public function withQuotation($Quotation)
    {
        $new = clone $this;
        $new->Quotation = $Quotation;

        return $new;
    }


}

