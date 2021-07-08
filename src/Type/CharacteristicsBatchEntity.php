<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicsBatchEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfCharacteristicsEntity
     */
    protected $CharacteristicsArray;

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

