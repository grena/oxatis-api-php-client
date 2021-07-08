<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class PaymentTypeListEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfPaymentTypeEntity
     */
    protected $PaymentTypeIDs;

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

