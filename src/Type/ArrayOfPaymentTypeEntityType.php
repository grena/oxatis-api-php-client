<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfPaymentTypeEntityType
 *
 *
 * XSD Type: ArrayOfPaymentTypeEntity
 */
class ArrayOfPaymentTypeEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType[] $paymentTypeID
     */
    private $paymentTypeID = [
        
    ];

    /**
     * Adds as paymentTypeID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType $paymentTypeID
     */
    public function addToPaymentTypeID(PaymentTypeEntityType $paymentTypeID)
    {
        $this->paymentTypeID[] = $paymentTypeID;
        return $this;
    }

    /**
     * isset paymentTypeID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTypeID($index)
    {
        return isset($this->paymentTypeID[$index]);
    }

    /**
     * unset paymentTypeID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTypeID($index)
    {
        unset($this->paymentTypeID[$index]);
    }

    /**
     * Gets as paymentTypeID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType[]
     */
    public function getPaymentTypeID()
    {
        return $this->paymentTypeID;
    }

    /**
     * Sets a new paymentTypeID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType[] $paymentTypeID
     * @return self
     */
    public function setPaymentTypeID(array $paymentTypeID = null)
    {
        $this->paymentTypeID = $paymentTypeID;
        return $this;
    }


}

