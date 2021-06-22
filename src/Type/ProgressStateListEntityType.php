<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProgressStateListEntityType
 *
 *
 * XSD Type: ProgressStateListEntity
 */
class ProgressStateListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType[] $progressStateList
     */
    private $progressStateList = null;

    /**
     * Adds as progressState
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType $progressState
     */
    public function addToProgressStateList(ProgressStateEntityType $progressState)
    {
        $this->progressStateList[] = $progressState;
        return $this;
    }

    /**
     * isset progressStateList
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgressStateList($index)
    {
        return isset($this->progressStateList[$index]);
    }

    /**
     * unset progressStateList
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgressStateList($index)
    {
        unset($this->progressStateList[$index]);
    }

    /**
     * Gets as progressStateList
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType[]
     */
    public function getProgressStateList()
    {
        return $this->progressStateList;
    }

    /**
     * Sets a new progressStateList
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateEntityType[] $progressStateList
     * @return self
     */
    public function setProgressStateList(array $progressStateList)
    {
        $this->progressStateList = $progressStateList;
        return $this;
    }


}

