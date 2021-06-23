<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class RootCategoryEntity
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Language;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return RootCategoryEntity
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
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return RootCategoryEntity
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }


}

