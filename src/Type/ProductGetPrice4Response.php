<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGetPrice4Response implements ResultInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfProductDataProductEntity
     */
    protected $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfProductDataProductEntity
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfProductDataProductEntity $DataResultService
     * @return ProductGetPrice4Response
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

