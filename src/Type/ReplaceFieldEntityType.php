<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ReplaceFieldEntityType
 *
 *
 * XSD Type: ReplaceFieldEntity
 */
class ReplaceFieldEntityType
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $value
     */
    private $value = null;

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
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

