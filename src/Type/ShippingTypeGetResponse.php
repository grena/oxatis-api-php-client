<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\ResultInterface;

class ShippingTypeGetResponse implements ResultInterface
{

    /**
     * @var
     * \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfShippingTypeDataShippingTypeEntity
     */
    private $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfShippingTypeDataShippingTypeEntity
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfShippingTypeDataShippingTypeEntity $DataResultService
     * @return ShippingTypeGetResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

