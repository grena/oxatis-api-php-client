<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationListEntity
     */
    private $QuotationList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationListEntity
     */
    public function getQuotationList()
    {
        return $this->QuotationList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationListEntity $QuotationList
     * @return QuotationListData
     */
    public function withQuotationList($QuotationList)
    {
        $new = clone $this;
        $new->QuotationList = $QuotationList;

        return $new;
    }


}

