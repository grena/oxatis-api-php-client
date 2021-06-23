<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicsIdEntity
{

    /**
     * @var int
     */
    private $ProductID;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicIdEntity
     */
    private $CharacteristicID;

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return CharacteristicsIdEntity
     */
    public function withProductID($ProductID)
    {
        $new = clone $this;
        $new->ProductID = $ProductID;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicIdEntity
     */
    public function getCharacteristicID()
    {
        return $this->CharacteristicID;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicIdEntity $CharacteristicID
     * @return CharacteristicsIdEntity
     */
    public function withCharacteristicID($CharacteristicID)
    {
        $new = clone $this;
        $new->CharacteristicID = $CharacteristicID;

        return $new;
    }


}

