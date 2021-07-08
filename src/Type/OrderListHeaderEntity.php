<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderListHeaderEntity
{

    /**
     * @var int
     */
    protected $ShippingProcessorCode;

    /**
     * @var bool
     */
    protected $OrdersShipped;

    /**
     * @var bool
     */
    protected $SetOrderDesc;

    /**
     * @var \DateTimeInterface
     */
    protected $OrderDateStart;

    /**
     * @var \DateTimeInterface
     */
    protected $OrderDateEnd;

    /**
     * @var \DateTimeInterface
     */
    protected $PaymentStatusDateStart;

    /**
     * @var \DateTimeInterface
     */
    protected $PaymentStatusDateEnd;

    /**
     * @var \DateTimeInterface
     */
    protected $LogisticDateStart;

    /**
     * @var \DateTimeInterface
     */
    protected $LogisticDateEnd;

    /**
     * @var int
     */
    protected $PaymentStatusCode;

    /**
     * @var int
     */
    protected $OrderStatus;

    /**
     * @var bool
     */
    protected $OrdersProcessed;

    /**
     * @var bool
     */
    protected $OrdersInvoiced;

    /**
     * @var \DateTimeInterface
     */
    protected $InvoiceDateStart;

    /**
     * @var \DateTimeInterface
     */
    protected $InvoiceDateEnd;

    /**
     * @return int
     */
    public function getShippingProcessorCode()
    {
        return $this->ShippingProcessorCode;
    }

    /**
     * @param int $ShippingProcessorCode
     * @return OrderListHeaderEntity
     */
    public function withShippingProcessorCode($ShippingProcessorCode)
    {
        $new = clone $this;
        $new->ShippingProcessorCode = $ShippingProcessorCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOrdersShipped()
    {
        return $this->OrdersShipped;
    }

    /**
     * @param bool $OrdersShipped
     * @return OrderListHeaderEntity
     */
    public function withOrdersShipped($OrdersShipped)
    {
        $new = clone $this;
        $new->OrdersShipped = $OrdersShipped;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSetOrderDesc()
    {
        return $this->SetOrderDesc;
    }

    /**
     * @param bool $SetOrderDesc
     * @return OrderListHeaderEntity
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
    public function getOrderDateStart()
    {
        return $this->OrderDateStart;
    }

    /**
     * @param \DateTimeInterface $OrderDateStart
     * @return OrderListHeaderEntity
     */
    public function withOrderDateStart($OrderDateStart)
    {
        $new = clone $this;
        $new->OrderDateStart = $OrderDateStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOrderDateEnd()
    {
        return $this->OrderDateEnd;
    }

    /**
     * @param \DateTimeInterface $OrderDateEnd
     * @return OrderListHeaderEntity
     */
    public function withOrderDateEnd($OrderDateEnd)
    {
        $new = clone $this;
        $new->OrderDateEnd = $OrderDateEnd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPaymentStatusDateStart()
    {
        return $this->PaymentStatusDateStart;
    }

    /**
     * @param \DateTimeInterface $PaymentStatusDateStart
     * @return OrderListHeaderEntity
     */
    public function withPaymentStatusDateStart($PaymentStatusDateStart)
    {
        $new = clone $this;
        $new->PaymentStatusDateStart = $PaymentStatusDateStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPaymentStatusDateEnd()
    {
        return $this->PaymentStatusDateEnd;
    }

    /**
     * @param \DateTimeInterface $PaymentStatusDateEnd
     * @return OrderListHeaderEntity
     */
    public function withPaymentStatusDateEnd($PaymentStatusDateEnd)
    {
        $new = clone $this;
        $new->PaymentStatusDateEnd = $PaymentStatusDateEnd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLogisticDateStart()
    {
        return $this->LogisticDateStart;
    }

    /**
     * @param \DateTimeInterface $LogisticDateStart
     * @return OrderListHeaderEntity
     */
    public function withLogisticDateStart($LogisticDateStart)
    {
        $new = clone $this;
        $new->LogisticDateStart = $LogisticDateStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLogisticDateEnd()
    {
        return $this->LogisticDateEnd;
    }

    /**
     * @param \DateTimeInterface $LogisticDateEnd
     * @return OrderListHeaderEntity
     */
    public function withLogisticDateEnd($LogisticDateEnd)
    {
        $new = clone $this;
        $new->LogisticDateEnd = $LogisticDateEnd;

        return $new;
    }

    /**
     * @return int
     */
    public function getPaymentStatusCode()
    {
        return $this->PaymentStatusCode;
    }

    /**
     * @param int $PaymentStatusCode
     * @return OrderListHeaderEntity
     */
    public function withPaymentStatusCode($PaymentStatusCode)
    {
        $new = clone $this;
        $new->PaymentStatusCode = $PaymentStatusCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }

    /**
     * @param int $OrderStatus
     * @return OrderListHeaderEntity
     */
    public function withOrderStatus($OrderStatus)
    {
        $new = clone $this;
        $new->OrderStatus = $OrderStatus;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOrdersProcessed()
    {
        return $this->OrdersProcessed;
    }

    /**
     * @param bool $OrdersProcessed
     * @return OrderListHeaderEntity
     */
    public function withOrdersProcessed($OrdersProcessed)
    {
        $new = clone $this;
        $new->OrdersProcessed = $OrdersProcessed;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOrdersInvoiced()
    {
        return $this->OrdersInvoiced;
    }

    /**
     * @param bool $OrdersInvoiced
     * @return OrderListHeaderEntity
     */
    public function withOrdersInvoiced($OrdersInvoiced)
    {
        $new = clone $this;
        $new->OrdersInvoiced = $OrdersInvoiced;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInvoiceDateStart()
    {
        return $this->InvoiceDateStart;
    }

    /**
     * @param \DateTimeInterface $InvoiceDateStart
     * @return OrderListHeaderEntity
     */
    public function withInvoiceDateStart($InvoiceDateStart)
    {
        $new = clone $this;
        $new->InvoiceDateStart = $InvoiceDateStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInvoiceDateEnd()
    {
        return $this->InvoiceDateEnd;
    }

    /**
     * @param \DateTimeInterface $InvoiceDateEnd
     * @return OrderListHeaderEntity
     */
    public function withInvoiceDateEnd($InvoiceDateEnd)
    {
        $new = clone $this;
        $new->InvoiceDateEnd = $InvoiceDateEnd;

        return $new;
    }


}

