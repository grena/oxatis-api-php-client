<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CountryEntity
{

    /**
     * @var string
     */
    protected $Code;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return CountryEntity
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }


}

