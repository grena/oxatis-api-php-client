<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ErrorEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var string
     */
    protected $Message;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfInt
     */
    protected $SourceIDArray;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return ErrorEntity
     */
    public function withMessage($Message)
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfInt
     */
    public function getSourceIDArray()
    {
        return $this->SourceIDArray;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfInt $SourceIDArray
     * @return ErrorEntity
     */
    public function withSourceIDArray($SourceIDArray)
    {
        $new = clone $this;
        $new->SourceIDArray = $SourceIDArray;

        return $new;
    }


}

