<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use Phpro\SoapClient\Type\ResultInterface;

class UserGetPasswordResponse implements ResultInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfUserDataUserEntity
     */
    private $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfUserDataUserEntity
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfUserDataUserEntity $DataResultService
     * @return UserGetPasswordResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

