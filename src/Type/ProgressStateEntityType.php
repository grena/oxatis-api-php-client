<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProgressStateEntityType
 *
 *
 * XSD Type: ProgressStateEntity
 */
class ProgressStateEntityType extends ProgressStateIdEntityType
{

    /**
     * @var string $color
     */
    private $color = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $nameFR
     */
    private $nameFR = null;

    /**
     * @var string $nameEN
     */
    private $nameEN = null;

    /**
     * @var string $nameES
     */
    private $nameES = null;

    /**
     * @var string $nameDE
     */
    private $nameDE = null;

    /**
     * @var string $nameIT
     */
    private $nameIT = null;

    /**
     * @var string $nameNL
     */
    private $nameNL = null;

    /**
     * @var string $commentFR
     */
    private $commentFR = null;

    /**
     * @var string $commentEN
     */
    private $commentEN = null;

    /**
     * @var string $commentES
     */
    private $commentES = null;

    /**
     * @var string $commentDE
     */
    private $commentDE = null;

    /**
     * @var string $commentIT
     */
    private $commentIT = null;

    /**
     * @var string $commentNL
     */
    private $commentNL = null;

    /**
     * @var bool $publish
     */
    private $publish = null;

    /**
     * @var bool $sendMail
     */
    private $sendMail = null;

    /**
     * @var bool $updateOrders
     */
    private $updateOrders = null;

    /**
     * @var bool $createInvoice
     */
    private $createInvoice = null;

    /**
     * @var string $nameCA
     */
    private $nameCA = null;

    /**
     * @var string $namePT
     */
    private $namePT = null;

    /**
     * @var string $commentCA
     */
    private $commentCA = null;

    /**
     * @var string $commentPT
     */
    private $commentPT = null;

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
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as nameFR
     *
     * @return string
     */
    public function getNameFR()
    {
        return $this->nameFR;
    }

    /**
     * Sets a new nameFR
     *
     * @param string $nameFR
     * @return self
     */
    public function setNameFR($nameFR)
    {
        $this->nameFR = $nameFR;
        return $this;
    }

    /**
     * Gets as nameEN
     *
     * @return string
     */
    public function getNameEN()
    {
        return $this->nameEN;
    }

    /**
     * Sets a new nameEN
     *
     * @param string $nameEN
     * @return self
     */
    public function setNameEN($nameEN)
    {
        $this->nameEN = $nameEN;
        return $this;
    }

    /**
     * Gets as nameES
     *
     * @return string
     */
    public function getNameES()
    {
        return $this->nameES;
    }

    /**
     * Sets a new nameES
     *
     * @param string $nameES
     * @return self
     */
    public function setNameES($nameES)
    {
        $this->nameES = $nameES;
        return $this;
    }

    /**
     * Gets as nameDE
     *
     * @return string
     */
    public function getNameDE()
    {
        return $this->nameDE;
    }

    /**
     * Sets a new nameDE
     *
     * @param string $nameDE
     * @return self
     */
    public function setNameDE($nameDE)
    {
        $this->nameDE = $nameDE;
        return $this;
    }

    /**
     * Gets as nameIT
     *
     * @return string
     */
    public function getNameIT()
    {
        return $this->nameIT;
    }

    /**
     * Sets a new nameIT
     *
     * @param string $nameIT
     * @return self
     */
    public function setNameIT($nameIT)
    {
        $this->nameIT = $nameIT;
        return $this;
    }

    /**
     * Gets as nameNL
     *
     * @return string
     */
    public function getNameNL()
    {
        return $this->nameNL;
    }

    /**
     * Sets a new nameNL
     *
     * @param string $nameNL
     * @return self
     */
    public function setNameNL($nameNL)
    {
        $this->nameNL = $nameNL;
        return $this;
    }

    /**
     * Gets as commentFR
     *
     * @return string
     */
    public function getCommentFR()
    {
        return $this->commentFR;
    }

    /**
     * Sets a new commentFR
     *
     * @param string $commentFR
     * @return self
     */
    public function setCommentFR($commentFR)
    {
        $this->commentFR = $commentFR;
        return $this;
    }

    /**
     * Gets as commentEN
     *
     * @return string
     */
    public function getCommentEN()
    {
        return $this->commentEN;
    }

    /**
     * Sets a new commentEN
     *
     * @param string $commentEN
     * @return self
     */
    public function setCommentEN($commentEN)
    {
        $this->commentEN = $commentEN;
        return $this;
    }

    /**
     * Gets as commentES
     *
     * @return string
     */
    public function getCommentES()
    {
        return $this->commentES;
    }

    /**
     * Sets a new commentES
     *
     * @param string $commentES
     * @return self
     */
    public function setCommentES($commentES)
    {
        $this->commentES = $commentES;
        return $this;
    }

    /**
     * Gets as commentDE
     *
     * @return string
     */
    public function getCommentDE()
    {
        return $this->commentDE;
    }

    /**
     * Sets a new commentDE
     *
     * @param string $commentDE
     * @return self
     */
    public function setCommentDE($commentDE)
    {
        $this->commentDE = $commentDE;
        return $this;
    }

    /**
     * Gets as commentIT
     *
     * @return string
     */
    public function getCommentIT()
    {
        return $this->commentIT;
    }

    /**
     * Sets a new commentIT
     *
     * @param string $commentIT
     * @return self
     */
    public function setCommentIT($commentIT)
    {
        $this->commentIT = $commentIT;
        return $this;
    }

    /**
     * Gets as commentNL
     *
     * @return string
     */
    public function getCommentNL()
    {
        return $this->commentNL;
    }

    /**
     * Sets a new commentNL
     *
     * @param string $commentNL
     * @return self
     */
    public function setCommentNL($commentNL)
    {
        $this->commentNL = $commentNL;
        return $this;
    }

    /**
     * Gets as publish
     *
     * @return bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Sets a new publish
     *
     * @param bool $publish
     * @return self
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;
        return $this;
    }

    /**
     * Gets as sendMail
     *
     * @return bool
     */
    public function getSendMail()
    {
        return $this->sendMail;
    }

    /**
     * Sets a new sendMail
     *
     * @param bool $sendMail
     * @return self
     */
    public function setSendMail($sendMail)
    {
        $this->sendMail = $sendMail;
        return $this;
    }

    /**
     * Gets as updateOrders
     *
     * @return bool
     */
    public function getUpdateOrders()
    {
        return $this->updateOrders;
    }

    /**
     * Sets a new updateOrders
     *
     * @param bool $updateOrders
     * @return self
     */
    public function setUpdateOrders($updateOrders)
    {
        $this->updateOrders = $updateOrders;
        return $this;
    }

    /**
     * Gets as createInvoice
     *
     * @return bool
     */
    public function getCreateInvoice()
    {
        return $this->createInvoice;
    }

    /**
     * Sets a new createInvoice
     *
     * @param bool $createInvoice
     * @return self
     */
    public function setCreateInvoice($createInvoice)
    {
        $this->createInvoice = $createInvoice;
        return $this;
    }

    /**
     * Gets as nameCA
     *
     * @return string
     */
    public function getNameCA()
    {
        return $this->nameCA;
    }

    /**
     * Sets a new nameCA
     *
     * @param string $nameCA
     * @return self
     */
    public function setNameCA($nameCA)
    {
        $this->nameCA = $nameCA;
        return $this;
    }

    /**
     * Gets as namePT
     *
     * @return string
     */
    public function getNamePT()
    {
        return $this->namePT;
    }

    /**
     * Sets a new namePT
     *
     * @param string $namePT
     * @return self
     */
    public function setNamePT($namePT)
    {
        $this->namePT = $namePT;
        return $this;
    }

    /**
     * Gets as commentCA
     *
     * @return string
     */
    public function getCommentCA()
    {
        return $this->commentCA;
    }

    /**
     * Sets a new commentCA
     *
     * @param string $commentCA
     * @return self
     */
    public function setCommentCA($commentCA)
    {
        $this->commentCA = $commentCA;
        return $this;
    }

    /**
     * Gets as commentPT
     *
     * @return string
     */
    public function getCommentPT()
    {
        return $this->commentPT;
    }

    /**
     * Sets a new commentPT
     *
     * @param string $commentPT
     * @return self
     */
    public function setCommentPT($commentPT)
    {
        $this->commentPT = $commentPT;
        return $this;
    }


}

