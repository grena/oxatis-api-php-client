<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UserGetCompanyNameResponse implements ResultInterface
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfUserDataUserEntity
     */
    protected $DataResultService;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfUserDataUserEntity
     */
    public function getDataResultService()
    {
        return $this->DataResultService;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfUserDataUserEntity $DataResultService
     * @return UserGetCompanyNameResponse
     */
    public function withDataResultService($DataResultService)
    {
        $new = clone $this;
        $new->DataResultService = $DataResultService;

        return $new;
    }


}

