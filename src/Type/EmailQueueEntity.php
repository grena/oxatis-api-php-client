<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class EmailQueueEntity
{

    /**
     * @var string
     */
    protected $Subject;

    /**
     * @var string
     */
    protected $Header;

    /**
     * @var string
     */
    protected $Intro;

    /**
     * @var string
     */
    protected $Body;

    /**
     * @var \DateTimeInterface
     */
    protected $SendDate;

    /**
     * @var string
     */
    protected $Priority;

    /**
     * @var string
     */
    protected $Importance;

    /**
     * @var string
     */
    protected $MessageFormat;

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return EmailQueueEntity
     */
    public function withSubject($Subject)
    {
        $new = clone $this;
        $new->Subject = $Subject;

        return $new;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->Header;
    }

    /**
     * @param string $Header
     * @return EmailQueueEntity
     */
    public function withHeader($Header)
    {
        $new = clone $this;
        $new->Header = $Header;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntro()
    {
        return $this->Intro;
    }

    /**
     * @param string $Intro
     * @return EmailQueueEntity
     */
    public function withIntro($Intro)
    {
        $new = clone $this;
        $new->Intro = $Intro;

        return $new;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->Body;
    }

    /**
     * @param string $Body
     * @return EmailQueueEntity
     */
    public function withBody($Body)
    {
        $new = clone $this;
        $new->Body = $Body;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSendDate()
    {
        return $this->SendDate;
    }

    /**
     * @param \DateTimeInterface $SendDate
     * @return EmailQueueEntity
     */
    public function withSendDate($SendDate)
    {
        $new = clone $this;
        $new->SendDate = $SendDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param string $Priority
     * @return EmailQueueEntity
     */
    public function withPriority($Priority)
    {
        $new = clone $this;
        $new->Priority = $Priority;

        return $new;
    }

    /**
     * @return string
     */
    public function getImportance()
    {
        return $this->Importance;
    }

    /**
     * @param string $Importance
     * @return EmailQueueEntity
     */
    public function withImportance($Importance)
    {
        $new = clone $this;
        $new->Importance = $Importance;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessageFormat()
    {
        return $this->MessageFormat;
    }

    /**
     * @param string $MessageFormat
     * @return EmailQueueEntity
     */
    public function withMessageFormat($MessageFormat)
    {
        $new = clone $this;
        $new->MessageFormat = $MessageFormat;

        return $new;
    }


}

