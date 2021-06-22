<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuotationEntityType
 *
 *
 * XSD Type: QuotationEntity
 */
class QuotationEntityType extends QuotationBaseEntityType
{

    /**
     * @var int $totalWeight
     */
    private $totalWeight = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\QuotationDetailEntityType[] $quotationItems
     */
    private $quotationItems = null;

    /**
     * Gets as totalWeight
     *
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Sets a new totalWeight
     *
     * @param int $totalWeight
     * @return self
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationDetailEntityType $item
     */
    public function addToQuotationItems(QuotationDetailEntityType $item)
    {
        $this->quotationItems[] = $item;
        return $this;
    }

    /**
     * isset quotationItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuotationItems($index)
    {
        return isset($this->quotationItems[$index]);
    }

    /**
     * unset quotationItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuotationItems($index)
    {
        unset($this->quotationItems[$index]);
    }

    /**
     * Gets as quotationItems
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\QuotationDetailEntityType[]
     */
    public function getQuotationItems()
    {
        return $this->quotationItems;
    }

    /**
     * Sets a new quotationItems
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\QuotationDetailEntityType[] $quotationItems
     * @return self
     */
    public function setQuotationItems(array $quotationItems)
    {
        $this->quotationItems = $quotationItems;
        return $this;
    }


}

