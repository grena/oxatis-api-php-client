<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStateListEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfProgressStateEntity
     */
    protected $ProgressStateList;

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

