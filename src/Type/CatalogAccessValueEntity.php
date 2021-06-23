<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CatalogAccessValueEntity
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
     * @return CatalogAccessValueEntity
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
     * @return CatalogAccessValueEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

