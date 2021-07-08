<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductResetFieldsEntity extends OxatisEntity
{

    /**
     * @var bool
     */
    protected $DateOfAvailability;

    /**
     * @return bool
     */
    public function getDateOfAvailability()
    {
        return $this->DateOfAvailability;
    }

    /**
     * @param bool $DateOfAvailability
     * @return ProductResetFieldsEntity
     */
    public function withDateOfAvailability($DateOfAvailability)
    {
        $new = clone $this;
        $new->DateOfAvailability = $DateOfAvailability;

        return $new;
    }


}

