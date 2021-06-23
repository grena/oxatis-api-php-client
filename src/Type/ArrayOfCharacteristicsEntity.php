<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfCharacteristicsEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CharacteristicsEntity
     */
    private $Characteristics;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->Characteristics) ? $this->Characteristics : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CharacteristicsEntity $Characteristics
     * @return ArrayOfCharacteristicsEntity
     */
    public function withCharacteristics($Characteristics)
    {
        $new = clone $this;
        $new->Characteristics = $Characteristics;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CharacteristicsEntity
     */
    public function getCharacteristics()
    {
        return $this->Characteristics;
    }


}

