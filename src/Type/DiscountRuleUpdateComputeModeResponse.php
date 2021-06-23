<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\ResultInterface;

class DiscountRuleUpdateComputeModeResponse implements ResultInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32
     */
    private $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32 $DataResultService
     * @return DiscountRuleUpdateComputeModeResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

