<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfUserDataUserEntity extends SoapResultService
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserData
     */
    protected $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserData $Data
     * @return SoapDataResultServiceOfUserDataUserEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

