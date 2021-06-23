<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class PaymentTypeData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity
     */
    private $PaymentType;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeEntity $PaymentType
     * @return PaymentTypeData
     */
    public function withPaymentType($PaymentType)
    {
        $new = clone $this;
        $new->PaymentType = $PaymentType;

        return $new;
    }


}

