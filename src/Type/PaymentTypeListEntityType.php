<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing PaymentTypeListEntityType
 *
 *
 * XSD Type: PaymentTypeListEntity
 */
class PaymentTypeListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType[] $paymentTypeIDs
     */
    private $paymentTypeIDs = null;

    /**
     * Adds as paymentTypeID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType $paymentTypeID
     */
    public function addToPaymentTypeIDs(PaymentTypeEntityType $paymentTypeID)
    {
        $this->paymentTypeIDs[] = $paymentTypeID;
        return $this;
    }

    /**
     * isset paymentTypeIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTypeIDs($index)
    {
        return isset($this->paymentTypeIDs[$index]);
    }

    /**
     * unset paymentTypeIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTypeIDs($index)
    {
        unset($this->paymentTypeIDs[$index]);
    }

    /**
     * Gets as paymentTypeIDs
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType[]
     */
    public function getPaymentTypeIDs()
    {
        return $this->paymentTypeIDs;
    }

    /**
     * Sets a new paymentTypeIDs
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntityType[] $paymentTypeIDs
     * @return self
     */
    public function setPaymentTypeIDs(array $paymentTypeIDs)
    {
        $this->paymentTypeIDs = $paymentTypeIDs;
        return $this;
    }


}

