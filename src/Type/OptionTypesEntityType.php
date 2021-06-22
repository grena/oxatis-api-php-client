<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OptionTypesEntityType
 *
 *
 * XSD Type: OptionTypesEntity
 */
class OptionTypesEntityType extends OxatisEntityType
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $systemName
     */
    private $systemName = null;

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

    /**
     * Gets as systemName
     *
     * @return string
     */
    public function getSystemName()
    {
        return $this->systemName;
    }

    /**
     * Sets a new systemName
     *
     * @param string $systemName
     * @return self
     */
    public function setSystemName($systemName)
    {
        $this->systemName = $systemName;
        return $this;
    }


}

