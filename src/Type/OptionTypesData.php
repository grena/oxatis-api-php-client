<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionTypesData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    private $OptionTypes;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    public function getOptionTypes()
    {
        return $this->OptionTypes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity $OptionTypes
     * @return OptionTypesData
     */
    public function withOptionTypes($OptionTypes)
    {
        $new = clone $this;
        $new->OptionTypes = $OptionTypes;

        return $new;
    }


}

