<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuotationListHeaderEntityType
 *
 *
 * XSD Type: QuotationListHeaderEntity
 */
class QuotationListHeaderEntityType
{

    /**
     * @var bool $setOrderDesc
     */
    private $setOrderDesc = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * Gets as setOrderDesc
     *
     * @return bool
     */
    public function getSetOrderDesc()
    {
        return $this->setOrderDesc;
    }

    /**
     * Sets a new setOrderDesc
     *
     * @param bool $setOrderDesc
     * @return self
     */
    public function setSetOrderDesc($setOrderDesc)
    {
        $this->setOrderDesc = $setOrderDesc;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }


}

