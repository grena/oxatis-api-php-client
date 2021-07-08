<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfPaymentTypeDataPaymentTypeEntity extends \Heavymind\Oxatis\ApiClient\Type\SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\PaymentTypeData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\PaymentTypeData $Data
     * @return SoapDataResultServiceOfPaymentTypeDataPaymentTypeEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

