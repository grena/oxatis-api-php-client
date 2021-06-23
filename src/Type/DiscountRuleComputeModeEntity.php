<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleComputeModeEntity
{

    /**
     * @var int
     */
    private $ComputeMode;

    /**
     * @return int
     */
    public function getComputeMode()
    {
        return $this->ComputeMode;
    }

    /**
     * @param int $ComputeMode
     * @return DiscountRuleComputeModeEntity
     */
    public function withComputeMode($ComputeMode)
    {
        $new = clone $this;
        $new->ComputeMode = $ComputeMode;

        return $new;
    }


}

