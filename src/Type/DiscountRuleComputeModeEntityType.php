<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing DiscountRuleComputeModeEntityType
 *
 *
 * XSD Type: DiscountRuleComputeModeEntity
 */
class DiscountRuleComputeModeEntityType
{

    /**
     * @var int $computeMode
     */
    private $computeMode = null;

    /**
     * Gets as computeMode
     *
     * @return int
     */
    public function getComputeMode()
    {
        return $this->computeMode;
    }

    /**
     * Sets a new computeMode
     *
     * @param int $computeMode
     * @return self
     */
    public function setComputeMode($computeMode)
    {
        $this->computeMode = $computeMode;
        return $this;
    }


}

