<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class LinkedProductBaseEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    protected $Item;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    protected $LinkedItem;

    /**
     * @var bool
     */
    protected $Fixed;

    /**
     * @var bool
     */
    protected $Compulsory;

    /**
     * @var bool
     */
    protected $Deletable;

    /**
     * @var bool
     */
    protected $Offered;

    /**
     * @var int
     */
    protected $Position;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $Item
     * @return LinkedProductBaseEntity
     */
    public function withItem($Item)
    {
        $new = clone $this;
        $new->Item = $Item;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity
     */
    public function getLinkedItem()
    {
        return $this->LinkedItem;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ProductIdEntity $LinkedItem
     * @return LinkedProductBaseEntity
     */
    public function withLinkedItem($LinkedItem)
    {
        $new = clone $this;
        $new->LinkedItem = $LinkedItem;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFixed()
    {
        return $this->Fixed;
    }

    /**
     * @param bool $Fixed
     * @return LinkedProductBaseEntity
     */
    public function withFixed($Fixed)
    {
        $new = clone $this;
        $new->Fixed = $Fixed;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCompulsory()
    {
        return $this->Compulsory;
    }

    /**
     * @param bool $Compulsory
     * @return LinkedProductBaseEntity
     */
    public function withCompulsory($Compulsory)
    {
        $new = clone $this;
        $new->Compulsory = $Compulsory;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDeletable()
    {
        return $this->Deletable;
    }

    /**
     * @param bool $Deletable
     * @return LinkedProductBaseEntity
     */
    public function withDeletable($Deletable)
    {
        $new = clone $this;
        $new->Deletable = $Deletable;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOffered()
    {
        return $this->Offered;
    }

    /**
     * @param bool $Offered
     * @return LinkedProductBaseEntity
     */
    public function withOffered($Offered)
    {
        $new = clone $this;
        $new->Offered = $Offered;

        return $new;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * @param int $Position
     * @return LinkedProductBaseEntity
     */
    public function withPosition($Position)
    {
        $new = clone $this;
        $new->Position = $Position;

        return $new;
    }


}

