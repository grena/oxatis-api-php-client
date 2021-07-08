<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductAttributesEntity extends \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductAttributeTextEntity
     */
    protected $TextAttribute;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntity
     */
    protected $MultipleAttribute1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntity
     */
    protected $MultipleAttribute2;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductAttributeTextEntity
     */
    public function getTextAttribute()
    {
        return $this->TextAttribute;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductAttributeTextEntity $TextAttribute
     * @return ProductAttributesEntity
     */
    public function withTextAttribute($TextAttribute)
    {
        $new = clone $this;
        $new->TextAttribute = $TextAttribute;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntity
     */
    public function getMultipleAttribute1()
    {
        return $this->MultipleAttribute1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntity $MultipleAttribute1
     * @return ProductAttributesEntity
     */
    public function withMultipleAttribute1($MultipleAttribute1)
    {
        $new = clone $this;
        $new->MultipleAttribute1 = $MultipleAttribute1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntity
     */
    public function getMultipleAttribute2()
    {
        return $this->MultipleAttribute2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductMultipleAttributeEntity $MultipleAttribute2
     * @return ProductAttributesEntity
     */
    public function withMultipleAttribute2($MultipleAttribute2)
    {
        $new = clone $this;
        $new->MultipleAttribute2 = $MultipleAttribute2;

        return $new;
    }


}

