<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaxClassEntity
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return TaxClassEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

