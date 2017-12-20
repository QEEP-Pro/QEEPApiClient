<?php

namespace spec\QEEP\QEEPApiClient\V2;

use QEEP\QEEPApiClient\V2\ApiClient;
use PhpSpec\ObjectBehavior;

class ApiClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(...$this->getApiClientParams());
    }

    function it_is_able_to_return_cities()
    {
        $this->beConstructedWith(...$this->getApiClientParams());

        $this->getCities()->shouldReturn(['Томск', 'Николаев']);
    }

    private function getApiClientParams()
    {
        return [
            18,
            'cde1svywpbsw0wk80o8gww4884w00gc',
            'https://demo.qeep.pro',
            'shop.qeep.pro',
            'https://demo.qeep.pro/catalog/',
        ];
    }
}
