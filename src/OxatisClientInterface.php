<?php

declare(strict_types=1);

namespace Heavymind\Oxatis\ApiClient;

use Heavymind\Oxatis\ApiClient\Api\ProductApiInterface;

/**
 * Client to use the Oxatis API.
 *
 * @author Adrien Pétremann <hello@grena.fr>
 */
interface OxatisClientInterface
{
    public function getProductApi(): ProductApiInterface;
}
