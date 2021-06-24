<?php

namespace spec\Heavymind\Oxatis\ApiClient;

use Heavymind\Oxatis\ApiClient\OxatisClientBuilder;
use Heavymind\Oxatis\ApiClient\OxatisClientInterface;
use PhpSpec\ObjectBehavior;

class OxatisClientBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(OxatisClientBuilder::class);
    }

    function it_builds_an_authenticated_client_by_token()
    {
        $client = $this->buildAuthenticatedByToken("APP_ID", "TOKEN");

        $client->shouldBeAnInstanceOf(OxatisClientInterface::class);
    }
}
