<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class CategoryEntity
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
     * @var int
     */
    private $ParentOxId;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return CategoryEntity
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
     * @return CategoryEntity
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return int
     */
    public function getParentOxId()
    {
        return $this->ParentOxId;
    }

    /**
     * @param int $ParentOxId
     * @return CategoryEntity
     */
    public function withParentOxId($ParentOxId)
    {
        $new = clone $this;
        $new->ParentOxId = $ParentOxId;

        return $new;
    }


}

