<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class PaymentTypeListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfPaymentTypeEntity
     */
    private $PaymentTypeIDs;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfPaymentTypeEntity
     */
    public function getPaymentTypeIDs()
    {
        return $this->PaymentTypeIDs;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfPaymentTypeEntity $PaymentTypeIDs
     * @return PaymentTypeListEntity
     */
    public function withPaymentTypeIDs($PaymentTypeIDs)
    {
        $new = clone $this;
        $new->PaymentTypeIDs = $PaymentTypeIDs;

        return $new;
    }


}

