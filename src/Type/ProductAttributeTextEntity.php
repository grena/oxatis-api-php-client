<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductAttributeTextEntity
{

    /**
     * @var string
     */
    private $Text;

    /**
     * @var string
     */
    private $Type;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return ProductAttributeTextEntity
     */
    public function withText($Text)
    {
        $new = clone $this;
        $new->Text = $Text;

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
     * @return ProductAttributeTextEntity
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }


}

