<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfPaymentTypeListDataPaymentTypeListEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeListData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeListData $Data
     * @return SoapDataResultServiceOfPaymentTypeListDataPaymentTypeListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

