<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfString implements IteratorAggregate
{

    /**
     * @var string
     */
    protected $string;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->string) ? $this->string : []);
    }

    /**
     * @param string $string
     * @return ArrayOfString
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }


}

