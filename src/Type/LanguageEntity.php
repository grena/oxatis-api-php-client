<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class LanguageEntity
{

    /**
     * @var string
     */
    protected $LanguageISOCode;

    /**
     * @return string
     */
    public function getLanguageISOCode()
    {
        return $this->LanguageISOCode;
    }

    /**
     * @param string $LanguageISOCode
     * @return LanguageEntity
     */
    public function withLanguageISOCode($LanguageISOCode)
    {
        $new = clone $this;
        $new->LanguageISOCode = $LanguageISOCode;

        return $new;
    }


}

