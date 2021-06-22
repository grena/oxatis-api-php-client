<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductOptionLayoutEntityType
 *
 *
 * XSD Type: ProductOptionLayoutEntity
 */
class ProductOptionLayoutEntityType extends OxatisEntityType
{

    /**
     * @var int $layoutType
     */
    private $layoutType = null;

    /**
     * Gets as layoutType
     *
     * @return int
     */
    public function getLayoutType()
    {
        return $this->layoutType;
    }

    /**
     * Sets a new layoutType
     *
     * @param int $layoutType
     * @return self
     */
    public function setLayoutType($layoutType)
    {
        $this->layoutType = $layoutType;
        return $this;
    }


}

