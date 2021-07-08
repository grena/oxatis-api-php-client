<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStatePeriodEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    protected $PageInformation;

    /**
     * @var \DateTimeInterface
     */
    protected $StartDate;

    /**
     * @var \DateTimeInterface
     */
    protected $EndDate;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity
     */
    protected $Orders;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaginationEntity
     */
    public function getPageInformation()
    {
        return $this->PageInformation;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaginationEntity $PageInformation
     * @return ProgressStatePeriodEntity
     */
    public function withPageInformation($PageInformation)
    {
        $new = clone $this;
        $new->PageInformation = $PageInformation;

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
     * @return ProgressStatePeriodEntity
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
     * @return ProgressStatePeriodEntity
     */
    public function withEndDate($EndDate)
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity
     */
    public function getOrders()
    {
        return $this->Orders;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderIdEntity $Orders
     * @return ProgressStatePeriodEntity
     */
    public function withOrders($Orders)
    {
        $new = clone $this;
        $new->Orders = $Orders;

        return $new;
    }


}

