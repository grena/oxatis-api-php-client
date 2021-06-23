<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfProgressStateListDataProgressStateListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateListData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateListData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateListData $Data
     * @return SoapDataResultServiceOfProgressStateListDataProgressStateListEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

