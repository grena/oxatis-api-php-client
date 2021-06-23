<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderPeriodEntity
{

    /**
     * @var \DateTimeInterface
     */
    private $StartDate;

    /**
     * @var \DateTimeInterface
     */
    private $EndDate;

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     * @return OrderPeriodEntity
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
     * @return OrderPeriodEntity
     */
    public function withEndDate($EndDate)
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }


}

