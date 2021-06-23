<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfPaymentTypeListDataPaymentTypeListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\PaymentTypeListData
     */
    private $Data;

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

