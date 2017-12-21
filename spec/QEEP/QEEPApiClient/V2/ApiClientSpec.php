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
            1,
            '2cwnrsem08u8o0cw0o8gwcgws0swosg',
            'http://qeep.develop',
            'shop.qeep.pro',
            'https://demo.qeep.pro/catalog/',
        ];
    }
}
