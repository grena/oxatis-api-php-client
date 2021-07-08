<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationListHeaderEntity
{

    /**
     * @var bool
     */
    protected $SetOrderDesc;

    /**
     * @var \DateTimeInterface
     */
    protected $StartDate;

    /**
     * @var \DateTimeInterface
     */
    protected $EndDate;

    /**
     * @return bool
     */
    public function getSetOrderDesc()
    {
        return $this->SetOrderDesc;
    }

    /**
     * @param bool $SetOrderDesc
     * @return QuotationListHeaderEntity
     */
    public function withSetOrderDesc($SetOrderDesc)
    {
        $new = clone $this;
        $new->SetOrderDesc = $SetOrderDesc;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     * @return QuotationListHeaderEntity
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param \DateTimeInterface $EndDate
     * @return QuotationListHeaderEntity
     */
    public function withEndDate($EndDate)
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }


}

