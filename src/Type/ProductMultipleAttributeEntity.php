<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductMultipleAttributeEntity
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfAttribute
     */
    private $Attributes;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ProductMultipleAttributeEntity
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
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return ProductMultipleAttributeEntity
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfAttribute
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfAttribute $Attributes
     * @return ProductMultipleAttributeEntity
     */
    public function withAttributes($Attributes)
    {
        $new = clone $this;
        $new->Attributes = $Attributes;

        return $new;
    }


}

