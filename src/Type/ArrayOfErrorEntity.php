<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfErrorEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ErrorEntity
     */
    private $Error;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->Error) ? $this->Error : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ErrorEntity $Error
     * @return ArrayOfErrorEntity
     */
    public function withError($Error)
    {
        $new = clone $this;
        $new->Error = $Error;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ErrorEntity
     */
    public function getError()
    {
        return $this->Error;
    }


}

