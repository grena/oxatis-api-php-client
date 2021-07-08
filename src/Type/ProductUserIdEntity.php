<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class ProductUserIdEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    protected $UserId;

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntity $UserId
     * @return ProductUserIdEntity
     */
    public function withUserId($UserId)
    {
        $new = clone $this;
        $new->UserId = $UserId;

        return $new;
    }


}

