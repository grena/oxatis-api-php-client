<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DataPlugInfosData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\DataPlugInfosEntity
     */
    protected $dataPlugInfos;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\DataPlugInfosEntity
     */
    public function getDataPlugInfos()
    {
        return $this->dataPlugInfos;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\DataPlugInfosEntity $dataPlugInfos
     * @return DataPlugInfosData
     */
    public function withDataPlugInfos($dataPlugInfos)
    {
        $new = clone $this;
        $new->dataPlugInfos = $dataPlugInfos;

        return $new;
    }


}

