<?php

declare(strict_types=1);

namespace Heavymind\Oxatis\ApiClient;

/**
 * Builder of the OxatisClient.
 *
 * @author Adrien Pétremann <hello@grena.fr>
 */
class OxatisClientBuilder
{
    /** @var string */
    protected $baseUri;

    /**
     * @param string $baseUri Base uri to request the API
     */
    public function __construct(string $baseUri)
    {
        $this->baseUri = $baseUri;
    }

    /**
     * Build the Oxatis client authenticated with AppID and token.
     *
     * @param string $appId     AppID given by Oxatis
     * @param string $token     Token given by Oxatis
     *
     * @return OxatisClientInterface
     */
    public function buildAuthenticatedByToken(string $appId, string $token): OxatisClientInterface
    {

    }
}
