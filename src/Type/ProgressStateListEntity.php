<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStateListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfProgressStateEntity
     */
    private $ProgressStateList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfProgressStateEntity
     */
    public function getProgressStateList()
    {
        return $this->ProgressStateList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfProgressStateEntity $ProgressStateList
     * @return ProgressStateListEntity
     */
    public function withProgressStateList($ProgressStateList)
    {
        $new = clone $this;
        $new->ProgressStateList = $ProgressStateList;

        return $new;
    }


}

