<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductIdEntity
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
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    private $OptionValues1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    private $OptionValues2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    private $OptionValues3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    private $OptionTypes1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    private $OptionTypes2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    private $OptionTypes3;

    /**
     * @var int
     */
    private $ParentItemID;

    /**
     * @var string
     */
    private $ParentItemSKU;

    /**
     * @var int
     */
    private $ProductType;

    /**
     * @var int
     */
    private $ExternalSourceID;

    /**
     * @return string
     */
    public function getItemSKU()
    {
        return $this->ItemSKU;
    }

    /**
     * @param string $ItemSKU
     * @return ProductIdEntity
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
     * @return ProductIdEntity
     */
    public function withProductLanguage($ProductLanguage)
    {
        $new = clone $this;
        $new->ProductLanguage = $ProductLanguage;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    public function getOptionValues1()
    {
        return $this->OptionValues1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity $OptionValues1
     * @return ProductIdEntity
     */
    public function withOptionValues1($OptionValues1)
    {
        $new = clone $this;
        $new->OptionValues1 = $OptionValues1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    public function getOptionValues2()
    {
        return $this->OptionValues2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity $OptionValues2
     * @return ProductIdEntity
     */
    public function withOptionValues2($OptionValues2)
    {
        $new = clone $this;
        $new->OptionValues2 = $OptionValues2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity
     */
    public function getOptionValues3()
    {
        return $this->OptionValues3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionValuesEntity $OptionValues3
     * @return ProductIdEntity
     */
    public function withOptionValues3($OptionValues3)
    {
        $new = clone $this;
        $new->OptionValues3 = $OptionValues3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    public function getOptionTypes1()
    {
        return $this->OptionTypes1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity $OptionTypes1
     * @return ProductIdEntity
     */
    public function withOptionTypes1($OptionTypes1)
    {
        $new = clone $this;
        $new->OptionTypes1 = $OptionTypes1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    public function getOptionTypes2()
    {
        return $this->OptionTypes2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity $OptionTypes2
     * @return ProductIdEntity
     */
    public function withOptionTypes2($OptionTypes2)
    {
        $new = clone $this;
        $new->OptionTypes2 = $OptionTypes2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity
     */
    public function getOptionTypes3()
    {
        return $this->OptionTypes3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\OptionTypesEntity $OptionTypes3
     * @return ProductIdEntity
     */
    public function withOptionTypes3($OptionTypes3)
    {
        $new = clone $this;
        $new->OptionTypes3 = $OptionTypes3;

        return $new;
    }

    /**
     * @return int
     */
    public function getParentItemID()
    {
        return $this->ParentItemID;
    }

    /**
     * @param int $ParentItemID
     * @return ProductIdEntity
     */
    public function withParentItemID($ParentItemID)
    {
        $new = clone $this;
        $new->ParentItemID = $ParentItemID;

        return $new;
    }

    /**
     * @return string
     */
    public function getParentItemSKU()
    {
        return $this->ParentItemSKU;
    }

    /**
     * @param string $ParentItemSKU
     * @return ProductIdEntity
     */
    public function withParentItemSKU($ParentItemSKU)
    {
        $new = clone $this;
        $new->ParentItemSKU = $ParentItemSKU;

        return $new;
    }

    /**
     * @return int
     */
    public function getProductType()
    {
        return $this->ProductType;
    }

    /**
     * @param int $ProductType
     * @return ProductIdEntity
     */
    public function withProductType($ProductType)
    {
        $new = clone $this;
        $new->ProductType = $ProductType;

        return $new;
    }

    /**
     * @return int
     */
    public function getExternalSourceID()
    {
        return $this->ExternalSourceID;
    }

    /**
     * @param int $ExternalSourceID
     * @return ProductIdEntity
     */
    public function withExternalSourceID($ExternalSourceID)
    {
        $new = clone $this;
        $new->ExternalSourceID = $ExternalSourceID;

        return $new;
    }


}

