<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfProgressStateEntityType
 *
 *
 * XSD Type: ArrayOfProgressStateEntity
 */
class ArrayOfProgressStateEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType[] $progressState
     */
    private $progressState = [
        
    ];

    /**
     * Adds as progressState
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType $progressState
     */
    public function addToProgressState(ProgressStateEntityType $progressState)
    {
        $this->progressState[] = $progressState;
        return $this;
    }

    /**
     * isset progressState
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgressState($index)
    {
        return isset($this->progressState[$index]);
    }

    /**
     * unset progressState
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgressState($index)
    {
        unset($this->progressState[$index]);
    }

    /**
     * Gets as progressState
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType[]
     */
    public function getProgressState()
    {
        return $this->progressState;
    }

    /**
     * Sets a new progressState
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType[] $progressState
     * @return self
     */
    public function setProgressState(array $progressState = null)
    {
        $this->progressState = $progressState;
        return $this;
    }


}

