<?php

namespace Heavymind\Oxatis\ApiClient\Type;


use IteratorAggregate;

class ArrayOfProgressStateEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntity
     */
    protected $ProgressState;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->ProgressState) ? $this->ProgressState : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntity $ProgressState
     * @return ArrayOfProgressStateEntity
     */
    public function withProgressState($ProgressState)
    {
        $new = clone $this;
        $new->ProgressState = $ProgressState;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntity
     */
    public function getProgressState()
    {
        return $this->ProgressState;
    }


}

