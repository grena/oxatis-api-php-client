<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderProgressStateLogEntity
{

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
    private $ProgressStateMnemonicName;

    /**
     * @var int
     */
    private $ProgressStateID;

    /**
     * @var string
     */
    private $Comment;

    /**
     * @var bool
     */
    private $Publish;

    /**
     * @var bool
     */
    private $SendEmail;

    /**
     * @var bool
     */
    private $UpdateOrderProgressState;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    private $ReplaceField1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    private $ReplaceField2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    private $ReplaceField3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    private $ReplaceField4;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    private $ReplaceField5;

    /**
     * @var string
     */
    private $AttachmentFileName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    private $Attachment;

    /**
     * @var bool
     */
    private $CreateInvoice;

    /**
     * @var string
     */
    private $InvoiceID;

    /**
     * @var \DateTimeInterface
     */
    private $InvoiceDate;

    /**
     * @var string
     */
    private $InvoiceFileName;

    /**
     * @var bool
     */
    private $SendSMS;

    /**
     * @var string
     */
    private $CommentSMS;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    private $Invoice;

    /**
     * @var bool
     */
    private $LockOrder;

    /**
     * @return int
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return OrderProgressStateLogEntity
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
     * @return OrderProgressStateLogEntity
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
    public function getProgressStateMnemonicName()
    {
        return $this->ProgressStateMnemonicName;
    }

    /**
     * @param string $ProgressStateMnemonicName
     * @return OrderProgressStateLogEntity
     */
    public function withProgressStateMnemonicName($ProgressStateMnemonicName)
    {
        $new = clone $this;
        $new->ProgressStateMnemonicName = $ProgressStateMnemonicName;

        return $new;
    }

    /**
     * @return int
     */
    public function getProgressStateID()
    {
        return $this->ProgressStateID;
    }

    /**
     * @param int $ProgressStateID
     * @return OrderProgressStateLogEntity
     */
    public function withProgressStateID($ProgressStateID)
    {
        $new = clone $this;
        $new->ProgressStateID = $ProgressStateID;

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
     * @return OrderProgressStateLogEntity
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
    public function getPublish()
    {
        return $this->Publish;
    }

    /**
     * @param bool $Publish
     * @return OrderProgressStateLogEntity
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
    public function getSendEmail()
    {
        return $this->SendEmail;
    }

    /**
     * @param bool $SendEmail
     * @return OrderProgressStateLogEntity
     */
    public function withSendEmail($SendEmail)
    {
        $new = clone $this;
        $new->SendEmail = $SendEmail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateOrderProgressState()
    {
        return $this->UpdateOrderProgressState;
    }

    /**
     * @param bool $UpdateOrderProgressState
     * @return OrderProgressStateLogEntity
     */
    public function withUpdateOrderProgressState($UpdateOrderProgressState)
    {
        $new = clone $this;
        $new->UpdateOrderProgressState = $UpdateOrderProgressState;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    public function getReplaceField1()
    {
        return $this->ReplaceField1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity $ReplaceField1
     * @return OrderProgressStateLogEntity
     */
    public function withReplaceField1($ReplaceField1)
    {
        $new = clone $this;
        $new->ReplaceField1 = $ReplaceField1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    public function getReplaceField2()
    {
        return $this->ReplaceField2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity $ReplaceField2
     * @return OrderProgressStateLogEntity
     */
    public function withReplaceField2($ReplaceField2)
    {
        $new = clone $this;
        $new->ReplaceField2 = $ReplaceField2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    public function getReplaceField3()
    {
        return $this->ReplaceField3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity $ReplaceField3
     * @return OrderProgressStateLogEntity
     */
    public function withReplaceField3($ReplaceField3)
    {
        $new = clone $this;
        $new->ReplaceField3 = $ReplaceField3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    public function getReplaceField4()
    {
        return $this->ReplaceField4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity $ReplaceField4
     * @return OrderProgressStateLogEntity
     */
    public function withReplaceField4($ReplaceField4)
    {
        $new = clone $this;
        $new->ReplaceField4 = $ReplaceField4;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity
     */
    public function getReplaceField5()
    {
        return $this->ReplaceField5;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ReplaceFieldEntity $ReplaceField5
     * @return OrderProgressStateLogEntity
     */
    public function withReplaceField5($ReplaceField5)
    {
        $new = clone $this;
        $new->ReplaceField5 = $ReplaceField5;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttachmentFileName()
    {
        return $this->AttachmentFileName;
    }

    /**
     * @param string $AttachmentFileName
     * @return OrderProgressStateLogEntity
     */
    public function withAttachmentFileName($AttachmentFileName)
    {
        $new = clone $this;
        $new->AttachmentFileName = $AttachmentFileName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\BinStreamObject $Attachment
     * @return OrderProgressStateLogEntity
     */
    public function withAttachment($Attachment)
    {
        $new = clone $this;
        $new->Attachment = $Attachment;

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
     * @return OrderProgressStateLogEntity
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
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }

    /**
     * @param string $InvoiceID
     * @return OrderProgressStateLogEntity
     */
    public function withInvoiceID($InvoiceID)
    {
        $new = clone $this;
        $new->InvoiceID = $InvoiceID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * @param \DateTimeInterface $InvoiceDate
     * @return OrderProgressStateLogEntity
     */
    public function withInvoiceDate($InvoiceDate)
    {
        $new = clone $this;
        $new->InvoiceDate = $InvoiceDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceFileName()
    {
        return $this->InvoiceFileName;
    }

    /**
     * @param string $InvoiceFileName
     * @return OrderProgressStateLogEntity
     */
    public function withInvoiceFileName($InvoiceFileName)
    {
        $new = clone $this;
        $new->InvoiceFileName = $InvoiceFileName;

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
     * @return OrderProgressStateLogEntity
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
    public function getCommentSMS()
    {
        return $this->CommentSMS;
    }

    /**
     * @param string $CommentSMS
     * @return OrderProgressStateLogEntity
     */
    public function withCommentSMS($CommentSMS)
    {
        $new = clone $this;
        $new->CommentSMS = $CommentSMS;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\BinStreamObject $Invoice
     * @return OrderProgressStateLogEntity
     */
    public function withInvoice($Invoice)
    {
        $new = clone $this;
        $new->Invoice = $Invoice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLockOrder()
    {
        return $this->LockOrder;
    }

    /**
     * @param bool $LockOrder
     * @return OrderProgressStateLogEntity
     */
    public function withLockOrder($LockOrder)
    {
        $new = clone $this;
        $new->LockOrder = $LockOrder;

        return $new;
    }


}

