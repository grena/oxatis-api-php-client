<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleBytesEntity extends OxatisEntity
{

    /**
     * @var string
     */
    protected $GZipFileName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    protected $GZipBytes;

    /**
     * @return string
     */
    public function getGZipFileName()
    {
        return $this->GZipFileName;
    }

    /**
     * @param string $GZipFileName
     * @return DiscountRuleBytesEntity
     */
    public function withGZipFileName($GZipFileName)
    {
        $new = clone $this;
        $new->GZipFileName = $GZipFileName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    public function getGZipBytes()
    {
        return $this->GZipBytes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\BinStreamObject $GZipBytes
     * @return DiscountRuleBytesEntity
     */
    public function withGZipBytes($GZipBytes)
    {
        $new = clone $this;
        $new->GZipBytes = $GZipBytes;

        return $new;
    }


}

