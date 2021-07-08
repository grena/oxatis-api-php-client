<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProductUpdateNameResponse implements ResultInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32
     */
    protected $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32 $DataResultService
     * @return ProductUpdateNameResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

