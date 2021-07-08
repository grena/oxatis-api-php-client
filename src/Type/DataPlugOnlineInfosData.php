<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DataPlugOnlineInfosData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosEntity
     */
    protected $DataPlugOnlineInfos;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosEntity
     */
    public function getDataPlugOnlineInfos()
    {
        return $this->DataPlugOnlineInfos;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataPlugOnlineInfosEntity $DataPlugOnlineInfos
     * @return DataPlugOnlineInfosData
     */
    public function withDataPlugOnlineInfos($DataPlugOnlineInfos)
    {
        $new = clone $this;
        $new->DataPlugOnlineInfos = $DataPlugOnlineInfos;

        return $new;
    }


}

