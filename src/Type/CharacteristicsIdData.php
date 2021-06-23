<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicsIdData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicsIdEntity
     */
    private $CharacteristicsId;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicsIdEntity
     */
    public function getCharacteristicsId()
    {
        return $this->CharacteristicsId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicsIdEntity $CharacteristicsId
     * @return CharacteristicsIdData
     */
    public function withCharacteristicsId($CharacteristicsId)
    {
        $new = clone $this;
        $new->CharacteristicsId = $CharacteristicsId;

        return $new;
    }


}

