<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfSoapDataResultServiceOfOxIdDataInt32 implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32
     */
    private $SoapDataResultServiceOfOxIdDataInt32;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->SoapDataResultServiceOfOxIdDataInt32) ? $this->SoapDataResultServiceOfOxIdDataInt32 : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32 $SoapDataResultServiceOfOxIdDataInt32
     * @return ArrayOfSoapDataResultServiceOfOxIdDataInt32
     */
    public function withSoapDataResultServiceOfOxIdDataInt32($SoapDataResultServiceOfOxIdDataInt32)
    {
        $new = clone $this;
        $new->SoapDataResultServiceOfOxIdDataInt32 = $SoapDataResultServiceOfOxIdDataInt32;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\SoapDataResultServiceOfOxIdDataInt32
     */
    public function getSoapDataResultServiceOfOxIdDataInt32()
    {
        return $this->SoapDataResultServiceOfOxIdDataInt32;
    }


}

