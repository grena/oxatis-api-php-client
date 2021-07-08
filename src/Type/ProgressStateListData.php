<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStateListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProgressStateListEntity
     */
    protected $ProgressStateList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProgressStateListEntity
     */
    public function getProgressStateList()
    {
        return $this->ProgressStateList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProgressStateListEntity $ProgressStateList
     * @return ProgressStateListData
     */
    public function withProgressStateList($ProgressStateList)
    {
        $new = clone $this;
        $new->ProgressStateList = $ProgressStateList;

        return $new;
    }


}

