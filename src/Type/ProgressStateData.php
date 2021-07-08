<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStateData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntity
     */
    protected $ProgressState;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntity
     */
    public function getProgressState()
    {
        return $this->ProgressState;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntity $ProgressState
     * @return ProgressStateData
     */
    public function withProgressState($ProgressState)
    {
        $new = clone $this;
        $new->ProgressState = $ProgressState;

        return $new;
    }


}

