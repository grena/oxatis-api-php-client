<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductItemSKULanguageIdEntity
{

    /**
     * @var string
     */
    private $ItemSKU;

    /**
     * @var string
     */
    private $ProductLanguage;

    /**
     * @return string
     */
    public function getItemSKU()
    {
        return $this->ItemSKU;
    }

    /**
     * @param string $ItemSKU
     * @return ProductItemSKULanguageIdEntity
     */
    public function withItemSKU($ItemSKU)
    {
        $new = clone $this;
        $new->ItemSKU = $ItemSKU;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductLanguage()
    {
        return $this->ProductLanguage;
    }

    /**
     * @param string $ProductLanguage
     * @return ProductItemSKULanguageIdEntity
     */
    public function withProductLanguage($ProductLanguage)
    {
        $new = clone $this;
        $new->ProductLanguage = $ProductLanguage;

        return $new;
    }


}
