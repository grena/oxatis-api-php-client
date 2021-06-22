<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing LinkedProductBaseEntityType
 *
 *
 * XSD Type: LinkedProductBaseEntity
 */
class LinkedProductBaseEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $item
     */
    private $item = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $linkedItem
     */
    private $linkedItem = null;

    /**
     * @var bool $fixed
     */
    private $fixed = null;

    /**
     * @var bool $compulsory
     */
    private $compulsory = null;

    /**
     * @var bool $deletable
     */
    private $deletable = null;

    /**
     * @var bool $offered
     */
    private $offered = null;

    /**
     * @var int $position
     */
    private $position = null;

    /**
     * Gets as item
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $item
     * @return self
     */
    public function setItem(ProductIdEntityType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as linkedItem
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType
     */
    public function getLinkedItem()
    {
        return $this->linkedItem;
    }

    /**
     * Sets a new linkedItem
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntityType $linkedItem
     * @return self
     */
    public function setLinkedItem(ProductIdEntityType $linkedItem)
    {
        $this->linkedItem = $linkedItem;
        return $this;
    }

    /**
     * Gets as fixed
     *
     * @return bool
     */
    public function getFixed()
    {
        return $this->fixed;
    }

    /**
     * Sets a new fixed
     *
     * @param bool $fixed
     * @return self
     */
    public function setFixed($fixed)
    {
        $this->fixed = $fixed;
        return $this;
    }

    /**
     * Gets as compulsory
     *
     * @return bool
     */
    public function getCompulsory()
    {
        return $this->compulsory;
    }

    /**
     * Sets a new compulsory
     *
     * @param bool $compulsory
     * @return self
     */
    public function setCompulsory($compulsory)
    {
        $this->compulsory = $compulsory;
        return $this;
    }

    /**
     * Gets as deletable
     *
     * @return bool
     */
    public function getDeletable()
    {
        return $this->deletable;
    }

    /**
     * Sets a new deletable
     *
     * @param bool $deletable
     * @return self
     */
    public function setDeletable($deletable)
    {
        $this->deletable = $deletable;
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

    /**
     * Gets as position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }


}

