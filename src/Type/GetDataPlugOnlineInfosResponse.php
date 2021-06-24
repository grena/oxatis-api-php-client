<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\ResultInterface;

class GetDataPlugOnlineInfosResponse implements ResultInterface
{

    /**
     * @var
     * \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfDataPlugOnlineInfosDataDataPlugOnlineInfosEntity
     */
    private $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfDataPlugOnlineInfosDataDataPlugOnlineInfosEntity
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfDataPlugOnlineInfosDataDataPlugOnlineInfosEntity $DataResultService
     * @return GetDataPlugOnlineInfosResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}
