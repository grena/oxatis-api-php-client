<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderListHeaderEntityType
 *
 *
 * XSD Type: OrderListHeaderEntity
 */
class OrderListHeaderEntityType
{

    /**
     * @var bool $ordersShipped
     */
    private $ordersShipped = null;

    /**
     * @var bool $setOrderDesc
     */
    private $setOrderDesc = null;

    /**
     * @var \DateTime $orderDateStart
     */
    private $orderDateStart = null;

    /**
     * @var \DateTime $orderDateEnd
     */
    private $orderDateEnd = null;

    /**
     * @var \DateTime $paymentStatusDateStart
     */
    private $paymentStatusDateStart = null;

    /**
     * @var \DateTime $paymentStatusDateEnd
     */
    private $paymentStatusDateEnd = null;

    /**
     * @var \DateTime $logisticDateStart
     */
    private $logisticDateStart = null;

    /**
     * @var \DateTime $logisticDateEnd
     */
    private $logisticDateEnd = null;

    /**
     * @var int $paymentStatusCode
     */
    private $paymentStatusCode = null;

    /**
     * @var int $orderStatus
     */
    private $orderStatus = null;

    /**
     * @var bool $ordersProcessed
     */
    private $ordersProcessed = null;

    /**
     * @var bool $ordersInvoiced
     */
    private $ordersInvoiced = null;

    /**
     * @var \DateTime $invoiceDateStart
     */
    private $invoiceDateStart = null;

    /**
     * @var \DateTime $invoiceDateEnd
     */
    private $invoiceDateEnd = null;

    /**
     * Gets as ordersShipped
     *
     * @return bool
     */
    public function getOrdersShipped()
    {
        return $this->ordersShipped;
    }

    /**
     * Sets a new ordersShipped
     *
     * @param bool $ordersShipped
     * @return self
     */
    public function setOrdersShipped($ordersShipped)
    {
        $this->ordersShipped = $ordersShipped;
        return $this;
    }

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
     * Gets as orderDateStart
     *
     * @return \DateTime
     */
    public function getOrderDateStart()
    {
        return $this->orderDateStart;
    }

    /**
     * Sets a new orderDateStart
     *
     * @param \DateTime $orderDateStart
     * @return self
     */
    public function setOrderDateStart(\DateTime $orderDateStart = null)
    {
        $this->orderDateStart = $orderDateStart;
        return $this;
    }

    /**
     * Gets as orderDateEnd
     *
     * @return \DateTime
     */
    public function getOrderDateEnd()
    {
        return $this->orderDateEnd;
    }

    /**
     * Sets a new orderDateEnd
     *
     * @param \DateTime $orderDateEnd
     * @return self
     */
    public function setOrderDateEnd(\DateTime $orderDateEnd = null)
    {
        $this->orderDateEnd = $orderDateEnd;
        return $this;
    }

    /**
     * Gets as paymentStatusDateStart
     *
     * @return \DateTime
     */
    public function getPaymentStatusDateStart()
    {
        return $this->paymentStatusDateStart;
    }

    /**
     * Sets a new paymentStatusDateStart
     *
     * @param \DateTime $paymentStatusDateStart
     * @return self
     */
    public function setPaymentStatusDateStart(\DateTime $paymentStatusDateStart = null)
    {
        $this->paymentStatusDateStart = $paymentStatusDateStart;
        return $this;
    }

    /**
     * Gets as paymentStatusDateEnd
     *
     * @return \DateTime
     */
    public function getPaymentStatusDateEnd()
    {
        return $this->paymentStatusDateEnd;
    }

    /**
     * Sets a new paymentStatusDateEnd
     *
     * @param \DateTime $paymentStatusDateEnd
     * @return self
     */
    public function setPaymentStatusDateEnd(\DateTime $paymentStatusDateEnd = null)
    {
        $this->paymentStatusDateEnd = $paymentStatusDateEnd;
        return $this;
    }

    /**
     * Gets as logisticDateStart
     *
     * @return \DateTime
     */
    public function getLogisticDateStart()
    {
        return $this->logisticDateStart;
    }

    /**
     * Sets a new logisticDateStart
     *
     * @param \DateTime $logisticDateStart
     * @return self
     */
    public function setLogisticDateStart(\DateTime $logisticDateStart = null)
    {
        $this->logisticDateStart = $logisticDateStart;
        return $this;
    }

    /**
     * Gets as logisticDateEnd
     *
     * @return \DateTime
     */
    public function getLogisticDateEnd()
    {
        return $this->logisticDateEnd;
    }

    /**
     * Sets a new logisticDateEnd
     *
     * @param \DateTime $logisticDateEnd
     * @return self
     */
    public function setLogisticDateEnd(\DateTime $logisticDateEnd = null)
    {
        $this->logisticDateEnd = $logisticDateEnd;
        return $this;
    }

    /**
     * Gets as paymentStatusCode
     *
     * @return int
     */
    public function getPaymentStatusCode()
    {
        return $this->paymentStatusCode;
    }

    /**
     * Sets a new paymentStatusCode
     *
     * @param int $paymentStatusCode
     * @return self
     */
    public function setPaymentStatusCode($paymentStatusCode)
    {
        $this->paymentStatusCode = $paymentStatusCode;
        return $this;
    }

    /**
     * Gets as orderStatus
     *
     * @return int
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Sets a new orderStatus
     *
     * @param int $orderStatus
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Gets as ordersProcessed
     *
     * @return bool
     */
    public function getOrdersProcessed()
    {
        return $this->ordersProcessed;
    }

    /**
     * Sets a new ordersProcessed
     *
     * @param bool $ordersProcessed
     * @return self
     */
    public function setOrdersProcessed($ordersProcessed)
    {
        $this->ordersProcessed = $ordersProcessed;
        return $this;
    }

    /**
     * Gets as ordersInvoiced
     *
     * @return bool
     */
    public function getOrdersInvoiced()
    {
        return $this->ordersInvoiced;
    }

    /**
     * Sets a new ordersInvoiced
     *
     * @param bool $ordersInvoiced
     * @return self
     */
    public function setOrdersInvoiced($ordersInvoiced)
    {
        $this->ordersInvoiced = $ordersInvoiced;
        return $this;
    }

    /**
     * Gets as invoiceDateStart
     *
     * @return \DateTime
     */
    public function getInvoiceDateStart()
    {
        return $this->invoiceDateStart;
    }

    /**
     * Sets a new invoiceDateStart
     *
     * @param \DateTime $invoiceDateStart
     * @return self
     */
    public function setInvoiceDateStart(\DateTime $invoiceDateStart = null)
    {
        $this->invoiceDateStart = $invoiceDateStart;
        return $this;
    }

    /**
     * Gets as invoiceDateEnd
     *
     * @return \DateTime
     */
    public function getInvoiceDateEnd()
    {
        return $this->invoiceDateEnd;
    }

    /**
     * Sets a new invoiceDateEnd
     *
     * @param \DateTime $invoiceDateEnd
     * @return self
     */
    public function setInvoiceDateEnd(\DateTime $invoiceDateEnd = null)
    {
        $this->invoiceDateEnd = $invoiceDateEnd;
        return $this;
    }


}

