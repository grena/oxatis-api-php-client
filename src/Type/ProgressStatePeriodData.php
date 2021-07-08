<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStatePeriodData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodEntity
     */
    protected $ProgressStatePeriod;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodEntity
     */
    public function getProgressStatePeriod()
    {
        return $this->ProgressStatePeriod;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStatePeriodEntity $ProgressStatePeriod
     * @return ProgressStatePeriodData
     */
    public function withProgressStatePeriod($ProgressStatePeriod)
    {
        $new = clone $this;
        $new->ProgressStatePeriod = $ProgressStatePeriod;

        return $new;
    }


}

