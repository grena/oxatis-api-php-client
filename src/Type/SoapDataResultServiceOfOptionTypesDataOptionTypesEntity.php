<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfOptionTypesDataOptionTypesEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesData $Data
     * @return SoapDataResultServiceOfOptionTypesDataOptionTypesEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

