<?php

declare(strict_types=1);

namespace Heavymind\Oxatis\ApiClient\Security;

/**
 * Credential data to authenticate to the API.
 *
 * @author Adrien Pétremann <hello@grena.fr>
 */
class Authentication
{
    /** @var string */
    protected string $appId;

    /** @var string */
    protected string $token;

    protected function __construct()
    {
    }

    public static function fromToken(string $appId, string $token): Authentication
    {
        $authentication = new static();
        $authentication->appId = $appId;
        $authentication->token = $token;

        return $authentication;
    }

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
}
