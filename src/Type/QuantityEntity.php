<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuantityEntity
{

    /**
     * @var int
     */
    private $Value;

    /**
     * @var bool
     */
    private $Append;

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param int $Value
     * @return QuantityEntity
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAppend()
    {
        return $this->Append;
    }

    /**
     * @param bool $Append
     * @return QuantityEntity
     */
    public function withAppend($Append)
    {
        $new = clone $this;
        $new->Append = $Append;

        return $new;
    }


}

