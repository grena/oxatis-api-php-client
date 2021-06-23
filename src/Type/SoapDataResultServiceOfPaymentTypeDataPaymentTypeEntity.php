<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfPaymentTypeDataPaymentTypeEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeData
     */
    private $Data;

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

