<?php

namespace Heavymind\Oxatis\ApiClient\Type;

use IteratorAggregate;

class ArrayOfCountryEntity implements IteratorAggregate
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CountryEntity
     */
    private $Country;

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator(is_array($this->Country) ? $this->Country : []);
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CountryEntity $Country
     * @return ArrayOfCountryEntity
     */
    public function withCountry($Country)
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CountryEntity
     */
    public function getCountry()
    {
        return $this->Country;
    }


}

