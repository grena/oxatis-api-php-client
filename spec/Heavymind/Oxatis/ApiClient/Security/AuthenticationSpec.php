<?php

namespace spec\Heavymind\Oxatis\ApiClient\Security;

use Heavymind\Oxatis\ApiClient\Security\Authentication;
use PhpSpec\ObjectBehavior;

class AuthenticationSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough("fromToken", ["APP_ID", "TOKEN"]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Authentication::class);
    }

    function it_gets_app_id()
    {
        $this->getAppId()->shouldBe("APP_ID");
    }

    function it_gets_token()
    {
        $this->getToken()->shouldBe("TOKEN");
    }
}
