<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CharacteristicsEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var string
     */
    protected $ItemSKU;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntity[]
     */
    protected $Characteristic;

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
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntity[]
     */
    public function getCharacteristic()
    {
        return is_array($this->Characteristic) ? $this->Characteristic : [$this->Characteristic];
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntity[] $Characteristic
     * @return CharacteristicsEntity
     */
    public function withCharacteristic(array $Characteristic)
    {
        $new = clone $this;
        $new->Characteristic = $Characteristic;

        return $new;
    }


}

