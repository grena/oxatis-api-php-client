<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderProgressStateHistoryEntityType
 *
 *
 * XSD Type: OrderProgressStateHistoryEntity
 */
class OrderProgressStateHistoryEntityType extends OxatisEntityType
{

    /**
     * @var string $progressStateNameEN
     */
    private $progressStateNameEN = null;

    /**
     * @var string $progressStateNameES
     */
    private $progressStateNameES = null;

    /**
     * @var string $progressStateNameIT
     */
    private $progressStateNameIT = null;

    /**
     * @var string $progressStateNameNL
     */
    private $progressStateNameNL = null;

    /**
     * @var string $progressStateNameDE
     */
    private $progressStateNameDE = null;

    /**
     * @var string $progressStateNameCA
     */
    private $progressStateNameCA = null;

    /**
     * @var string $color
     */
    private $color = null;

    /**
     * @var int $orderID
     */
    private $orderID = null;

    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var string $progressStateName
     */
    private $progressStateName = null;

    /**
     * @var string $comment
     */
    private $comment = null;

    /**
     * @var bool $published
     */
    private $published = null;

    /**
     * @var string $fileAttachment
     */
    private $fileAttachment = null;

    /**
     * Gets as progressStateNameEN
     *
     * @return string
     */
    public function getProgressStateNameEN()
    {
        return $this->progressStateNameEN;
    }

    /**
     * Sets a new progressStateNameEN
     *
     * @param string $progressStateNameEN
     * @return self
     */
    public function setProgressStateNameEN($progressStateNameEN)
    {
        $this->progressStateNameEN = $progressStateNameEN;
        return $this;
    }

    /**
     * Gets as progressStateNameES
     *
     * @return string
     */
    public function getProgressStateNameES()
    {
        return $this->progressStateNameES;
    }

    /**
     * Sets a new progressStateNameES
     *
     * @param string $progressStateNameES
     * @return self
     */
    public function setProgressStateNameES($progressStateNameES)
    {
        $this->progressStateNameES = $progressStateNameES;
        return $this;
    }

    /**
     * Gets as progressStateNameIT
     *
     * @return string
     */
    public function getProgressStateNameIT()
    {
        return $this->progressStateNameIT;
    }

    /**
     * Sets a new progressStateNameIT
     *
     * @param string $progressStateNameIT
     * @return self
     */
    public function setProgressStateNameIT($progressStateNameIT)
    {
        $this->progressStateNameIT = $progressStateNameIT;
        return $this;
    }

    /**
     * Gets as progressStateNameNL
     *
     * @return string
     */
    public function getProgressStateNameNL()
    {
        return $this->progressStateNameNL;
    }

    /**
     * Sets a new progressStateNameNL
     *
     * @param string $progressStateNameNL
     * @return self
     */
    public function setProgressStateNameNL($progressStateNameNL)
    {
        $this->progressStateNameNL = $progressStateNameNL;
        return $this;
    }

    /**
     * Gets as progressStateNameDE
     *
     * @return string
     */
    public function getProgressStateNameDE()
    {
        return $this->progressStateNameDE;
    }

    /**
     * Sets a new progressStateNameDE
     *
     * @param string $progressStateNameDE
     * @return self
     */
    public function setProgressStateNameDE($progressStateNameDE)
    {
        $this->progressStateNameDE = $progressStateNameDE;
        return $this;
    }

    /**
     * Gets as progressStateNameCA
     *
     * @return string
     */
    public function getProgressStateNameCA()
    {
        return $this->progressStateNameCA;
    }

    /**
     * Sets a new progressStateNameCA
     *
     * @param string $progressStateNameCA
     * @return self
     */
    public function setProgressStateNameCA($progressStateNameCA)
    {
        $this->progressStateNameCA = $progressStateNameCA;
        return $this;
    }

    /**
     * Gets as color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * @param string $color
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as orderID
     *
     * @return int
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Sets a new orderID
     *
     * @param int $orderID
     * @return self
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as progressStateName
     *
     * @return string
     */
    public function getProgressStateName()
    {
        return $this->progressStateName;
    }

    /**
     * Sets a new progressStateName
     *
     * @param string $progressStateName
     * @return self
     */
    public function setProgressStateName($progressStateName)
    {
        $this->progressStateName = $progressStateName;
        return $this;
    }

    /**
     * Gets as comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Sets a new published
     *
     * @param bool $published
     * @return self
     */
    public function setPublished($published)
    {
        $this->published = $published;
        return $this;
    }

    /**
     * Gets as fileAttachment
     *
     * @return string
     */
    public function getFileAttachment()
    {
        return $this->fileAttachment;
    }

    /**
     * Sets a new fileAttachment
     *
     * @param string $fileAttachment
     * @return self
     */
    public function setFileAttachment($fileAttachment)
    {
        $this->fileAttachment = $fileAttachment;
        return $this;
    }


}

