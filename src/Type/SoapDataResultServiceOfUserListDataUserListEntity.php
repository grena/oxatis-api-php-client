<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfUserListDataUserListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserListData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserListData $Data
     * @return SoapDataResultServiceOfUserListDataUserListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

