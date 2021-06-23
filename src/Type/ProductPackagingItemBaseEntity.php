<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductPackagingItemBaseEntity
{

    /**
     * @var string
     */
    private $ItemSKU;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var float
     */
    private $Price;

    /**
     * @var bool
     */
    private $Optional;

    /**
     * @return string
     */
    public function getItemSKU()
    {
        return $this->ItemSKU;
    }

    /**
     * @param string $ItemSKU
     * @return ProductPackagingItemBaseEntity
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return ProductPackagingItemBaseEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return ProductPackagingItemBaseEntity
     */
    public function withPrice($Price)
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOptional()
    {
        return $this->Optional;
    }

    /**
     * @param bool $Optional
     * @return ProductPackagingItemBaseEntity
     */
    public function withOptional($Optional)
    {
        $new = clone $this;
        $new->Optional = $Optional;

        return $new;
    }


}

