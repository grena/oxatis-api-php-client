<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductWebBlockEntityType
 *
 *
 * XSD Type: ProductWebBlockEntity
 */
class ProductWebBlockEntityType extends OxatisEntityType
{

    /**
     * @var string $descriptionWebBlock
     */
    private $descriptionWebBlock = null;

    /**
     * @var string $longDescriptionWebBlock
     */
    private $longDescriptionWebBlock = null;

    /**
     * Gets as descriptionWebBlock
     *
     * @return string
     */
    public function getDescriptionWebBlock()
    {
        return $this->descriptionWebBlock;
    }

    /**
     * Sets a new descriptionWebBlock
     *
     * @param string $descriptionWebBlock
     * @return self
     */
    public function setDescriptionWebBlock($descriptionWebBlock)
    {
        $this->descriptionWebBlock = $descriptionWebBlock;
        return $this;
    }

    /**
     * Gets as longDescriptionWebBlock
     *
     * @return string
     */
    public function getLongDescriptionWebBlock()
    {
        return $this->longDescriptionWebBlock;
    }

    /**
     * Sets a new longDescriptionWebBlock
     *
     * @param string $longDescriptionWebBlock
     * @return self
     */
    public function setLongDescriptionWebBlock($longDescriptionWebBlock)
    {
        $this->longDescriptionWebBlock = $longDescriptionWebBlock;
        return $this;
    }


}

