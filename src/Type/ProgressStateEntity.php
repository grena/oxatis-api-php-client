<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProgressStateEntity
{

    /**
     * @var string
     */
    private $Color;

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $NameFR;

    /**
     * @var string
     */
    private $NameEN;

    /**
     * @var string
     */
    private $NameES;

    /**
     * @var string
     */
    private $NameDE;

    /**
     * @var string
     */
    private $NameIT;

    /**
     * @var string
     */
    private $NameNL;

    /**
     * @var string
     */
    private $CommentFR;

    /**
     * @var string
     */
    private $CommentEN;

    /**
     * @var string
     */
    private $CommentES;

    /**
     * @var string
     */
    private $CommentDE;

    /**
     * @var string
     */
    private $CommentIT;

    /**
     * @var string
     */
    private $CommentNL;

    /**
     * @var bool
     */
    private $Publish;

    /**
     * @var bool
     */
    private $SendMail;

    /**
     * @var bool
     */
    private $UpdateOrders;

    /**
     * @var bool
     */
    private $CreateInvoice;

    /**
     * @var string
     */
    private $NameCA;

    /**
     * @var string
     */
    private $NamePT;

    /**
     * @var string
     */
    private $CommentCA;

    /**
     * @var string
     */
    private $CommentPT;

    /**
     * @var bool
     */
    private $SendSMS;

    /**
     * @var string
     */
    private $CommentSMSFR;

    /**
     * @var string
     */
    private $CommentSMSEN;

    /**
     * @var string
     */
    private $CommentSMSES;

    /**
     * @var string
     */
    private $CommentSMSDE;

    /**
     * @var string
     */
    private $CommentSMSIT;

    /**
     * @var string
     */
    private $CommentSMSNL;

    /**
     * @var string
     */
    private $CommentSMSCA;

    /**
     * @var string
     */
    private $CommentSMSPT;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->Color;
    }

    /**
     * @param string $Color
     * @return ProgressStateEntity
     */
    public function withColor($Color)
    {
        $new = clone $this;
        $new->Color = $Color;

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
     * @return ProgressStateEntity
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
    public function getNameFR()
    {
        return $this->NameFR;
    }

    /**
     * @param string $NameFR
     * @return ProgressStateEntity
     */
    public function withNameFR($NameFR)
    {
        $new = clone $this;
        $new->NameFR = $NameFR;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameEN()
    {
        return $this->NameEN;
    }

    /**
     * @param string $NameEN
     * @return ProgressStateEntity
     */
    public function withNameEN($NameEN)
    {
        $new = clone $this;
        $new->NameEN = $NameEN;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameES()
    {
        return $this->NameES;
    }

    /**
     * @param string $NameES
     * @return ProgressStateEntity
     */
    public function withNameES($NameES)
    {
        $new = clone $this;
        $new->NameES = $NameES;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameDE()
    {
        return $this->NameDE;
    }

    /**
     * @param string $NameDE
     * @return ProgressStateEntity
     */
    public function withNameDE($NameDE)
    {
        $new = clone $this;
        $new->NameDE = $NameDE;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameIT()
    {
        return $this->NameIT;
    }

    /**
     * @param string $NameIT
     * @return ProgressStateEntity
     */
    public function withNameIT($NameIT)
    {
        $new = clone $this;
        $new->NameIT = $NameIT;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameNL()
    {
        return $this->NameNL;
    }

    /**
     * @param string $NameNL
     * @return ProgressStateEntity
     */
    public function withNameNL($NameNL)
    {
        $new = clone $this;
        $new->NameNL = $NameNL;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentFR()
    {
        return $this->CommentFR;
    }

    /**
     * @param string $CommentFR
     * @return ProgressStateEntity
     */
    public function withCommentFR($CommentFR)
    {
        $new = clone $this;
        $new->CommentFR = $CommentFR;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentEN()
    {
        return $this->CommentEN;
    }

    /**
     * @param string $CommentEN
     * @return ProgressStateEntity
     */
    public function withCommentEN($CommentEN)
    {
        $new = clone $this;
        $new->CommentEN = $CommentEN;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentES()
    {
        return $this->CommentES;
    }

    /**
     * @param string $CommentES
     * @return ProgressStateEntity
     */
    public function withCommentES($CommentES)
    {
        $new = clone $this;
        $new->CommentES = $CommentES;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentDE()
    {
        return $this->CommentDE;
    }

    /**
     * @param string $CommentDE
     * @return ProgressStateEntity
     */
    public function withCommentDE($CommentDE)
    {
        $new = clone $this;
        $new->CommentDE = $CommentDE;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentIT()
    {
        return $this->CommentIT;
    }

    /**
     * @param string $CommentIT
     * @return ProgressStateEntity
     */
    public function withCommentIT($CommentIT)
    {
        $new = clone $this;
        $new->CommentIT = $CommentIT;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentNL()
    {
        return $this->CommentNL;
    }

    /**
     * @param string $CommentNL
     * @return ProgressStateEntity
     */
    public function withCommentNL($CommentNL)
    {
        $new = clone $this;
        $new->CommentNL = $CommentNL;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPublish()
    {
        return $this->Publish;
    }

    /**
     * @param bool $Publish
     * @return ProgressStateEntity
     */
    public function withPublish($Publish)
    {
        $new = clone $this;
        $new->Publish = $Publish;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendMail()
    {
        return $this->SendMail;
    }

    /**
     * @param bool $SendMail
     * @return ProgressStateEntity
     */
    public function withSendMail($SendMail)
    {
        $new = clone $this;
        $new->SendMail = $SendMail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateOrders()
    {
        return $this->UpdateOrders;
    }

    /**
     * @param bool $UpdateOrders
     * @return ProgressStateEntity
     */
    public function withUpdateOrders($UpdateOrders)
    {
        $new = clone $this;
        $new->UpdateOrders = $UpdateOrders;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCreateInvoice()
    {
        return $this->CreateInvoice;
    }

    /**
     * @param bool $CreateInvoice
     * @return ProgressStateEntity
     */
    public function withCreateInvoice($CreateInvoice)
    {
        $new = clone $this;
        $new->CreateInvoice = $CreateInvoice;

        return $new;
    }

    /**
     * @return string
     */
    public function getNameCA()
    {
        return $this->NameCA;
    }

    /**
     * @param string $NameCA
     * @return ProgressStateEntity
     */
    public function withNameCA($NameCA)
    {
        $new = clone $this;
        $new->NameCA = $NameCA;

        return $new;
    }

    /**
     * @return string
     */
    public function getNamePT()
    {
        return $this->NamePT;
    }

    /**
     * @param string $NamePT
     * @return ProgressStateEntity
     */
    public function withNamePT($NamePT)
    {
        $new = clone $this;
        $new->NamePT = $NamePT;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentCA()
    {
        return $this->CommentCA;
    }

    /**
     * @param string $CommentCA
     * @return ProgressStateEntity
     */
    public function withCommentCA($CommentCA)
    {
        $new = clone $this;
        $new->CommentCA = $CommentCA;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentPT()
    {
        return $this->CommentPT;
    }

    /**
     * @param string $CommentPT
     * @return ProgressStateEntity
     */
    public function withCommentPT($CommentPT)
    {
        $new = clone $this;
        $new->CommentPT = $CommentPT;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSendSMS()
    {
        return $this->SendSMS;
    }

    /**
     * @param bool $SendSMS
     * @return ProgressStateEntity
     */
    public function withSendSMS($SendSMS)
    {
        $new = clone $this;
        $new->SendSMS = $SendSMS;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSFR()
    {
        return $this->CommentSMSFR;
    }

    /**
     * @param string $CommentSMSFR
     * @return ProgressStateEntity
     */
    public function withCommentSMSFR($CommentSMSFR)
    {
        $new = clone $this;
        $new->CommentSMSFR = $CommentSMSFR;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSEN()
    {
        return $this->CommentSMSEN;
    }

    /**
     * @param string $CommentSMSEN
     * @return ProgressStateEntity
     */
    public function withCommentSMSEN($CommentSMSEN)
    {
        $new = clone $this;
        $new->CommentSMSEN = $CommentSMSEN;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSES()
    {
        return $this->CommentSMSES;
    }

    /**
     * @param string $CommentSMSES
     * @return ProgressStateEntity
     */
    public function withCommentSMSES($CommentSMSES)
    {
        $new = clone $this;
        $new->CommentSMSES = $CommentSMSES;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSDE()
    {
        return $this->CommentSMSDE;
    }

    /**
     * @param string $CommentSMSDE
     * @return ProgressStateEntity
     */
    public function withCommentSMSDE($CommentSMSDE)
    {
        $new = clone $this;
        $new->CommentSMSDE = $CommentSMSDE;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSIT()
    {
        return $this->CommentSMSIT;
    }

    /**
     * @param string $CommentSMSIT
     * @return ProgressStateEntity
     */
    public function withCommentSMSIT($CommentSMSIT)
    {
        $new = clone $this;
        $new->CommentSMSIT = $CommentSMSIT;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSNL()
    {
        return $this->CommentSMSNL;
    }

    /**
     * @param string $CommentSMSNL
     * @return ProgressStateEntity
     */
    public function withCommentSMSNL($CommentSMSNL)
    {
        $new = clone $this;
        $new->CommentSMSNL = $CommentSMSNL;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSCA()
    {
        return $this->CommentSMSCA;
    }

    /**
     * @param string $CommentSMSCA
     * @return ProgressStateEntity
     */
    public function withCommentSMSCA($CommentSMSCA)
    {
        $new = clone $this;
        $new->CommentSMSCA = $CommentSMSCA;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentSMSPT()
    {
        return $this->CommentSMSPT;
    }

    /**
     * @param string $CommentSMSPT
     * @return ProgressStateEntity
     */
    public function withCommentSMSPT($CommentSMSPT)
    {
        $new = clone $this;
        $new->CommentSMSPT = $CommentSMSPT;

        return $new;
    }


}

