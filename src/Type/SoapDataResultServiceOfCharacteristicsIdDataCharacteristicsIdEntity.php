<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class SoapDataResultServiceOfCharacteristicsIdDataCharacteristicsIdEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicsIdData
     */
    private $Data;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicsIdData
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicsIdData $Data
     * @return SoapDataResultServiceOfCharacteristicsIdDataCharacteristicsIdEntity
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }


}

