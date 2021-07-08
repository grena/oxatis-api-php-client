<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationListEntity extends \Heavymind\Oxatis\ApiClient\Type\QuotationListHeaderEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    protected $PageInformation;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationIdEntity
     */
    protected $QuotationIDs;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return QuotationListEntity
     */
    public function withPageInformation($PageInformation)
    {
        $new = clone $this;
        $new->PageInformation = $PageInformation;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationIdEntity
     */
    public function getQuotationIDs()
    {
        return $this->QuotationIDs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationIdEntity $QuotationIDs
     * @return QuotationListEntity
     */
    public function withQuotationIDs($QuotationIDs)
    {
        $new = clone $this;
        $new->QuotationIDs = $QuotationIDs;

        return $new;
    }


}

