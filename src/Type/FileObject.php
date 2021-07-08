<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class FileObject
{

    /**
     * @var string
     */
    protected $MediaType;

    /**
     * @var string
     */
    protected $StrBytes;

    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->MediaType;
    }

    /**
     * @param string $MediaType
     * @return FileObject
     */
    public function withMediaType($MediaType)
    {
        $new = clone $this;
        $new->MediaType = $MediaType;

        return $new;
    }

    /**
     * @return string
     */
    public function getStrBytes()
    {
        return $this->StrBytes;
    }

    /**
     * @param string $StrBytes
     * @return FileObject
     */
    public function withStrBytes($StrBytes)
    {
        $new = clone $this;
        $new->StrBytes = $StrBytes;

        return $new;
    }


}

