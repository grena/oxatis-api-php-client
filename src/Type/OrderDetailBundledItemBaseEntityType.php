<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderDetailBundledItemBaseEntityType
 *
 *
 * XSD Type: OrderDetailBundledItemBaseEntity
 */
class OrderDetailBundledItemBaseEntityType extends OxatisEntityType
{

    /**
     * @var int $itemOxID
     */
    private $itemOxID = null;

    /**
     * @var string $itemSKU
     */
    private $itemSKU = null;

    /**
     * @var string $itemName
     */
    private $itemName = null;

    /**
     * @var float $grossPrice
     */
    private $grossPrice = null;

    /**
     * @var string $itemMainImageUrl
     */
    private $itemMainImageUrl = null;

    /**
     * @var string $itemThumbnailImageUrl
     */
    private $itemThumbnailImageUrl = null;

    /**
     * @var string $option1Name
     */
    private $option1Name = null;

    /**
     * @var string $option1Value
     */
    private $option1Value = null;

    /**
     * @var string $option2Name
     */
    private $option2Name = null;

    /**
     * @var string $option2Value
     */
    private $option2Value = null;

    /**
     * @var string $option3Name
     */
    private $option3Name = null;

    /**
     * @var string $option3Value
     */
    private $option3Value = null;

    /**
     * @var bool $offered
     */
    private $offered = null;

    /**
     * Gets as itemOxID
     *
     * @return int
     */
    public function getItemOxID()
    {
        return $this->itemOxID;
    }

    /**
     * Sets a new itemOxID
     *
     * @param int $itemOxID
     * @return self
     */
    public function setItemOxID($itemOxID)
    {
        $this->itemOxID = $itemOxID;
        return $this;
    }

    /**
     * Gets as itemSKU
     *
     * @return string
     */
    public function getItemSKU()
    {
        return $this->itemSKU;
    }

    /**
     * Sets a new itemSKU
     *
     * @param string $itemSKU
     * @return self
     */
    public function setItemSKU($itemSKU)
    {
        $this->itemSKU = $itemSKU;
        return $this;
    }

    /**
     * Gets as itemName
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Sets a new itemName
     *
     * @param string $itemName
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
        return $this;
    }

    /**
     * Gets as grossPrice
     *
     * @return float
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * Sets a new grossPrice
     *
     * @param float $grossPrice
     * @return self
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = $grossPrice;
        return $this;
    }

    /**
     * Gets as itemMainImageUrl
     *
     * @return string
     */
    public function getItemMainImageUrl()
    {
        return $this->itemMainImageUrl;
    }

    /**
     * Sets a new itemMainImageUrl
     *
     * @param string $itemMainImageUrl
     * @return self
     */
    public function setItemMainImageUrl($itemMainImageUrl)
    {
        $this->itemMainImageUrl = $itemMainImageUrl;
        return $this;
    }

    /**
     * Gets as itemThumbnailImageUrl
     *
     * @return string
     */
    public function getItemThumbnailImageUrl()
    {
        return $this->itemThumbnailImageUrl;
    }

    /**
     * Sets a new itemThumbnailImageUrl
     *
     * @param string $itemThumbnailImageUrl
     * @return self
     */
    public function setItemThumbnailImageUrl($itemThumbnailImageUrl)
    {
        $this->itemThumbnailImageUrl = $itemThumbnailImageUrl;
        return $this;
    }

    /**
     * Gets as option1Name
     *
     * @return string
     */
    public function getOption1Name()
    {
        return $this->option1Name;
    }

    /**
     * Sets a new option1Name
     *
     * @param string $option1Name
     * @return self
     */
    public function setOption1Name($option1Name)
    {
        $this->option1Name = $option1Name;
        return $this;
    }

    /**
     * Gets as option1Value
     *
     * @return string
     */
    public function getOption1Value()
    {
        return $this->option1Value;
    }

    /**
     * Sets a new option1Value
     *
     * @param string $option1Value
     * @return self
     */
    public function setOption1Value($option1Value)
    {
        $this->option1Value = $option1Value;
        return $this;
    }

    /**
     * Gets as option2Name
     *
     * @return string
     */
    public function getOption2Name()
    {
        return $this->option2Name;
    }

    /**
     * Sets a new option2Name
     *
     * @param string $option2Name
     * @return self
     */
    public function setOption2Name($option2Name)
    {
        $this->option2Name = $option2Name;
        return $this;
    }

    /**
     * Gets as option2Value
     *
     * @return string
     */
    public function getOption2Value()
    {
        return $this->option2Value;
    }

    /**
     * Sets a new option2Value
     *
     * @param string $option2Value
     * @return self
     */
    public function setOption2Value($option2Value)
    {
        $this->option2Value = $option2Value;
        return $this;
    }

    /**
     * Gets as option3Name
     *
     * @return string
     */
    public function getOption3Name()
    {
        return $this->option3Name;
    }

    /**
     * Sets a new option3Name
     *
     * @param string $option3Name
     * @return self
     */
    public function setOption3Name($option3Name)
    {
        $this->option3Name = $option3Name;
        return $this;
    }

    /**
     * Gets as option3Value
     *
     * @return string
     */
    public function getOption3Value()
    {
        return $this->option3Value;
    }

    /**
     * Sets a new option3Value
     *
     * @param string $option3Value
     * @return self
     */
    public function setOption3Value($option3Value)
    {
        $this->option3Value = $option3Value;
        return $this;
    }

    /**
     * Gets as offered
     *
     * @return bool
     */
    public function getOffered()
    {
        return $this->offered;
    }

    /**
     * Sets a new offered
     *
     * @param bool $offered
     * @return self
     */
    public function setOffered($offered)
    {
        $this->offered = $offered;
        return $this;
    }


}

