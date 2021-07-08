<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class PaymentTypeListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeListEntity
     */
    protected $PaymentTypeList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeListEntity
     */
    public function getPaymentTypeList()
    {
        return $this->PaymentTypeList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeListEntity $PaymentTypeList
     * @return PaymentTypeListData
     */
    public function withPaymentTypeList($PaymentTypeList)
    {
        $new = clone $this;
        $new->PaymentTypeList = $PaymentTypeList;

        return $new;
    }


}

