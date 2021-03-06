<?php

namespace spec\QEEP\QEEPApiClient;


use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiClientSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->beConstructedWith(...$this->getApiClientParams());
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
