<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing CategoryEntityType
 *
 *
 * XSD Type: CategoryEntity
 */
class CategoryEntityType extends OxatisEntityType
{

    /**
     * @var string $language
     */
    private $language = null;

    /**
     * @var int $parentOxId
     */
    private $parentOxId = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as parentOxId
     *
     * @return int
     */
    public function getParentOxId()
    {
        return $this->parentOxId;
    }

    /**
     * Sets a new parentOxId
     *
     * @param int $parentOxId
     * @return self
     */
    public function setParentOxId($parentOxId)
    {
        $this->parentOxId = $parentOxId;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

