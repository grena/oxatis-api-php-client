<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing MobilePropertiesEntityType
 *
 *
 * XSD Type: MobilePropertiesEntity
 */
class MobilePropertiesEntityType
{

    /**
     * @var string $logoUrl
     */
    private $logoUrl = null;

    /**
     * Gets as logoUrl
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Sets a new logoUrl
     *
     * @param string $logoUrl
     * @return self
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }


}

