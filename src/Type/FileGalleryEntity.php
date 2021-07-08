<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class FileGalleryEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $FileName;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    protected $FileBytes;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return FileGalleryEntity
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return FileGalleryEntity
     */
    public function withFileName($FileName)
    {
        $new = clone $this;
        $new->FileName = $FileName;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\BinStreamObject
     */
    public function getFileBytes()
    {
        return $this->FileBytes;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\BinStreamObject $FileBytes
     * @return FileGalleryEntity
     */
    public function withFileBytes($FileBytes)
    {
        $new = clone $this;
        $new->FileBytes = $FileBytes;

        return $new;
    }


}

