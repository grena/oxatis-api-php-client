<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionTypeListData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypeListEntity
     */
    private $OptionTypeList;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypeListEntity
     */
    public function getOptionTypeList()
    {
        return $this->OptionTypeList;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypeListEntity $OptionTypeList
     * @return OptionTypeListData
     */
    public function withOptionTypeList($OptionTypeList)
    {
        $new = clone $this;
        $new->OptionTypeList = $OptionTypeList;

        return $new;
    }


}

