<?php

declare(strict_types=1);

namespace Heavymind\Oxatis\ApiClient;

use Heavymind\Oxatis\ApiClient\Security\Authentication;

/**
 * Builder of the OxatisClient.
 *
 * @author Adrien Pétremann <hello@grena.fr>
 */
class OxatisClientBuilder
{
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
        $authentication = Authentication::fromToken($appId, $token);

        return $this->buildAuthenticatedClient($authentication);
    }

    /**
     * @param Authentication $authentication
     *
     * @return OxatisClientInterface
     */
    protected function buildAuthenticatedClient(Authentication $authentication): OxatisClientInterface
    {
        $client = new OxatisClient($authentication);

        return $client;
    }
}
