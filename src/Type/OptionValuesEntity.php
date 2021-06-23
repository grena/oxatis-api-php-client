<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OptionValuesEntity
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Name;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return OptionValuesEntity
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return OptionValuesEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

