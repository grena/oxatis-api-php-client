<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderSourceEntity
{

    /**
     * @var string
     */
    private $SourceOrderID;

    /**
     * @var int
     */
    private $SourceTypeID;

    /**
     * @return string
     */
    public function getSourceOrderID()
    {
        return $this->SourceOrderID;
    }

    /**
     * @param string $SourceOrderID
     * @return OrderSourceEntity
     */
    public function withSourceOrderID($SourceOrderID)
    {
        $new = clone $this;
        $new->SourceOrderID = $SourceOrderID;

        return $new;
    }

    /**
     * @return int
     */
    public function getSourceTypeID()
    {
        return $this->SourceTypeID;
    }

    /**
     * @param int $SourceTypeID
     * @return OrderSourceEntity
     */
    public function withSourceTypeID($SourceTypeID)
    {
        $new = clone $this;
        $new->SourceTypeID = $SourceTypeID;

        return $new;
    }


}

