<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class AppPropertiesEntity
{

    /**
     * @var int
     */
    protected $ServiceID;

    /**
     * @var string
     */
    protected $Language;

    /**
     * @var string
     */
    protected $AppSKU;

    /**
     * @var string
     */
    protected $Properties;

    /**
     * @return int
     */
    public function getServiceID()
    {
        return $this->ServiceID;
    }

    /**
     * @param int $ServiceID
     * @return AppPropertiesEntity
     */
    public function withServiceID($ServiceID)
    {
        $new = clone $this;
        $new->ServiceID = $ServiceID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return AppPropertiesEntity
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return string
     */
    public function getAppSKU()
    {
        return $this->AppSKU;
    }

    /**
     * @param string $AppSKU
     * @return AppPropertiesEntity
     */
    public function withAppSKU($AppSKU)
    {
        $new = clone $this;
        $new->AppSKU = $AppSKU;

        return $new;
    }

    /**
     * @return string
     */
    public function getProperties()
    {
        return $this->Properties;
    }

    /**
     * @param string $Properties
     * @return AppPropertiesEntity
     */
    public function withProperties($Properties)
    {
        $new = clone $this;
        $new->Properties = $Properties;

        return $new;
    }


}

