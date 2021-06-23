<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\ResultInterface;

class ProgressStateGetListResponse implements ResultInterface
{

    /**
     * @var
     * \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfProgressStateListDataProgressStateListEntity
     */
    private $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfProgressStateListDataProgressStateListEntity
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfProgressStateListDataProgressStateListEntity $DataResultService
     * @return ProgressStateGetListResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

