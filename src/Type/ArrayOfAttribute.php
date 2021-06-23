<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ArrayOfAttribute
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\Attribute
     */
    private $Attribute;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\Attribute
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\Attribute $Attribute
     * @return ArrayOfAttribute
     */
    public function withAttribute($Attribute)
    {
        $new = clone $this;
        $new->Attribute = $Attribute;

        return $new;
    }


}

