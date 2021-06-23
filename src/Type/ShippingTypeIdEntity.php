<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ShippingTypeIdEntity
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $LanguageISOCode;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ShippingTypeIdEntity
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
    public function getLanguageISOCode()
    {
        return $this->LanguageISOCode;
    }

    /**
     * @param string $LanguageISOCode
     * @return ShippingTypeIdEntity
     */
    public function withLanguageISOCode($LanguageISOCode)
    {
        $new = clone $this;
        $new->LanguageISOCode = $LanguageISOCode;

        return $new;
    }


}

