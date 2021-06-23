<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ReplaceFieldEntity
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Value;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ReplaceFieldEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return ReplaceFieldEntity
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }


}

