<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing EmailQueueEntityType
 *
 *
 * XSD Type: EmailQueueEntity
 */
class EmailQueueEntityType
{

    /**
     * @var string $subject
     */
    private $subject = null;

    /**
     * @var string $body
     */
    private $body = null;

    /**
     * @var \DateTime $sendDate
     */
    private $sendDate = null;

    /**
     * @var string $priority
     */
    private $priority = null;

    /**
     * @var string $importance
     */
    private $importance = null;

    /**
     * @var string $messageFormat
     */
    private $messageFormat = null;

    /**
     * Gets as subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as sendDate
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * Sets a new sendDate
     *
     * @param \DateTime $sendDate
     * @return self
     */
    public function setSendDate(\DateTime $sendDate = null)
    {
        $this->sendDate = $sendDate;
        return $this;
    }

    /**
     * Gets as priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * @param string $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as importance
     *
     * @return string
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * Sets a new importance
     *
     * @param string $importance
     * @return self
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;
        return $this;
    }

    /**
     * Gets as messageFormat
     *
     * @return string
     */
    public function getMessageFormat()
    {
        return $this->messageFormat;
    }

    /**
     * Sets a new messageFormat
     *
     * @param string $messageFormat
     * @return self
     */
    public function setMessageFormat($messageFormat)
    {
        $this->messageFormat = $messageFormat;
        return $this;
    }


}

