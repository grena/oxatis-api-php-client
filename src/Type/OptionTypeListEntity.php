<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionTypeListEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity
     */
    private $OxIDArray;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity
     */
    public function getOxIDArray()
    {
        return $this->OxIDArray;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOxatisEntity $OxIDArray
     * @return OptionTypeListEntity
     */
    public function withOxIDArray($OxIDArray)
    {
        $new = clone $this;
        $new->OxIDArray = $OxIDArray;

        return $new;
    }


}

