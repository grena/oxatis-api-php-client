<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ProductUserIdEntityType
 *
 *
 * XSD Type: ProductUserIdEntity
 */
class ProductUserIdEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType $userId
     */
    private $userId = null;

    /**
     * Gets as userId
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\UserIdEntityType $userId
     * @return self
     */
    public function setUserId(UserIdEntityType $userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

