<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionValuesData
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    private $OptionValues;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    public function getOptionValues()
    {
        return $this->OptionValues;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity $OptionValues
     * @return OptionValuesData
     */
    public function withOptionValues($OptionValues)
    {
        $new = clone $this;
        $new->OptionValues = $OptionValues;

        return $new;
    }


}

