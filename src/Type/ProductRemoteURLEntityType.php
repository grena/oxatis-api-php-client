<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductRemoteURLEntityType
 *
 *
 * XSD Type: ProductRemoteURLEntity
 */
class ProductRemoteURLEntityType extends OxatisEntityType
{

    /**
     * @var string $url
     */
    private $url = null;

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

