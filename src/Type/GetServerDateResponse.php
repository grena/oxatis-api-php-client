<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\ResultInterface;

class GetServerDateResponse implements ResultInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfDTDataDateTime
     */
    private $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfDTDataDateTime
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfDTDataDateTime $DataResultService
     * @return GetServerDateResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

