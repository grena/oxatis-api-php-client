<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing BrandEntityType
 *
 *
 * XSD Type: BrandEntity
 */
class BrandEntityType extends OxatisEntityType
{

    /**
     * @var string $name
     */
    private $name = null;

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

