<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicsBatchEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfCharacteristicsEntity
     */
    private $CharacteristicsArray;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfCharacteristicsEntity
     */
    public function getCharacteristicsArray()
    {
        return $this->CharacteristicsArray;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfCharacteristicsEntity $CharacteristicsArray
     * @return CharacteristicsBatchEntity
     */
    public function withCharacteristicsArray($CharacteristicsArray)
    {
        $new = clone $this;
        $new->CharacteristicsArray = $CharacteristicsArray;

        return $new;
    }


}

