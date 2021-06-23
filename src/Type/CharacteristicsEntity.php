<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicsEntity
{

    /**
     * @var string
     */
    private $ItemSKU;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntity
     */
    private $Characteristic;

    /**
     * @return string
     */
    public function getItemSKU()
    {
        return $this->ItemSKU;
    }

    /**
     * @param string $ItemSKU
     * @return CharacteristicsEntity
     */
    public function withItemSKU($ItemSKU)
    {
        $new = clone $this;
        $new->ItemSKU = $ItemSKU;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntity
     */
    public function getCharacteristic()
    {
        return $this->Characteristic;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntity $Characteristic
     * @return CharacteristicsEntity
     */
    public function withCharacteristic($Characteristic)
    {
        $new = clone $this;
        $new->Characteristic = $Characteristic;

        return $new;
    }


}

