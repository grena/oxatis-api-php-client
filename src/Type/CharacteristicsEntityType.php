<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing CharacteristicsEntityType
 *
 *
 * XSD Type: CharacteristicsEntity
 */
class CharacteristicsEntityType extends OxatisEntityType
{

    /**
     * @var string $itemSKU
     */
    private $itemSKU = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntityType[] $characteristic
     */
    private $characteristic = [
        
    ];

    /**
     * Gets as itemSKU
     *
     * @return string
     */
    public function getItemSKU()
    {
        return $this->itemSKU;
    }

    /**
     * Sets a new itemSKU
     *
     * @param string $itemSKU
     * @return self
     */
    public function setItemSKU($itemSKU)
    {
        $this->itemSKU = $itemSKU;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntityType $characteristic
     */
    public function addToCharacteristic(CharacteristicEntityType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristic($index)
    {
        return isset($this->characteristic[$index]);
    }

    /**
     * unset characteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristic($index)
    {
        unset($this->characteristic[$index]);
    }

    /**
     * Gets as characteristic
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntityType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicEntityType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }


}

