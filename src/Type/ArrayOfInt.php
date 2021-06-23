<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfInt implements IteratorAggregate
{

    /**
     * @var int
     */
    private $SourceID;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->SourceID) ? $this->SourceID : []);
    }

    /**
     * @param int $SourceID
     * @return ArrayOfInt
     */
    public function withSourceID($SourceID)
    {
        $new = clone $this;
        $new->SourceID = $SourceID;

        return $new;
    }

    /**
     * @return int
     */
    public function getSourceID()
    {
        return $this->SourceID;
    }


}

