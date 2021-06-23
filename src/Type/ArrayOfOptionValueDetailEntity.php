<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfOptionValueDetailEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValueDetailEntity
     */
    private $OptionValue;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->OptionValue) ? $this->OptionValue : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValueDetailEntity $OptionValue
     * @return ArrayOfOptionValueDetailEntity
     */
    public function withOptionValue($OptionValue)
    {
        $new = clone $this;
        $new->OptionValue = $OptionValue;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValueDetailEntity
     */
    public function getOptionValue()
    {
        return $this->OptionValue;
    }


}

