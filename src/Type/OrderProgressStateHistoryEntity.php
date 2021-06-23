<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderProgressStateHistoryEntity
{

    /**
     * @var int
     */
    private $ID;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $ProgressStateNameEN;

    /**
     * @var string
     */
    private $ProgressStateNameES;

    /**
     * @var string
     */
    private $ProgressStateNameIT;

    /**
     * @var string
     */
    private $ProgressStateNameNL;

    /**
     * @var string
     */
    private $ProgressStateNameDE;

    /**
     * @var string
     */
    private $ProgressStateNameCA;

    /**
     * @var string
     */
    private $Color;

    /**
     * @var int
     */
    private $OrderID;

    /**
     * @var \DateTimeInterface
     */
    private $Date;

    /**
     * @var string
     */
    private $ProgressStateName;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var bool
     */
    private $Published;

    /**
     * @var string
     */
    private $FileAttachment;

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return OrderProgressStateHistoryEntity
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return OrderProgressStateHistoryEntity
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgressStateNameEN()
    {
        return $this->ProgressStateNameEN;
    }

    /**
     * @param string $ProgressStateNameEN
     * @return OrderProgressStateHistoryEntity
     */
    public function withProgressStateNameEN($ProgressStateNameEN)
    {
        $new = clone $this;
        $new->ProgressStateNameEN = $ProgressStateNameEN;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgressStateNameES()
    {
        return $this->ProgressStateNameES;
    }

    /**
     * @param string $ProgressStateNameES
     * @return OrderProgressStateHistoryEntity
     */
    public function withProgressStateNameES($ProgressStateNameES)
    {
        $new = clone $this;
        $new->ProgressStateNameES = $ProgressStateNameES;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgressStateNameIT()
    {
        return $this->ProgressStateNameIT;
    }

    /**
     * @param string $ProgressStateNameIT
     * @return OrderProgressStateHistoryEntity
     */
    public function withProgressStateNameIT($ProgressStateNameIT)
    {
        $new = clone $this;
        $new->ProgressStateNameIT = $ProgressStateNameIT;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgressStateNameNL()
    {
        return $this->ProgressStateNameNL;
    }

    /**
     * @param string $ProgressStateNameNL
     * @return OrderProgressStateHistoryEntity
     */
    public function withProgressStateNameNL($ProgressStateNameNL)
    {
        $new = clone $this;
        $new->ProgressStateNameNL = $ProgressStateNameNL;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgressStateNameDE()
    {
        return $this->ProgressStateNameDE;
    }

    /**
     * @param string $ProgressStateNameDE
     * @return OrderProgressStateHistoryEntity
     */
    public function withProgressStateNameDE($ProgressStateNameDE)
    {
        $new = clone $this;
        $new->ProgressStateNameDE = $ProgressStateNameDE;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgressStateNameCA()
    {
        return $this->ProgressStateNameCA;
    }

    /**
     * @param string $ProgressStateNameCA
     * @return OrderProgressStateHistoryEntity
     */
    public function withProgressStateNameCA($ProgressStateNameCA)
    {
        $new = clone $this;
        $new->ProgressStateNameCA = $ProgressStateNameCA;

        return $new;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param string $Color
     * @return OrderProgressStateHistoryEntity
     */
    public function withColor($Color)
    {
        $new = clone $this;
        $new->Color = $Color;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return OrderProgressStateHistoryEntity
     */
    public function withOrderID($OrderID)
    {
        $new = clone $this;
        $new->OrderID = $OrderID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return OrderProgressStateHistoryEntity
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getProgressStateName()
    {
        return $this->ProgressStateName;
    }

    /**
     * @param string $ProgressStateName
     * @return OrderProgressStateHistoryEntity
     */
    public function withProgressStateName($ProgressStateName)
    {
        $new = clone $this;
        $new->ProgressStateName = $ProgressStateName;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return OrderProgressStateHistoryEntity
     */
    public function withComment($Comment)
    {
        $new = clone $this;
        $new->Comment = $Comment;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPublished()
    {
        return $this->Published;
    }

    /**
     * @param bool $Published
     * @return OrderProgressStateHistoryEntity
     */
    public function withPublished($Published)
    {
        $new = clone $this;
        $new->Published = $Published;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileAttachment()
    {
        return $this->FileAttachment;
    }

    /**
     * @param string $FileAttachment
     * @return OrderProgressStateHistoryEntity
     */
    public function withFileAttachment($FileAttachment)
    {
        $new = clone $this;
        $new->FileAttachment = $FileAttachment;

        return $new;
    }


}

