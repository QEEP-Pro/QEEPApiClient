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
            1,
            'secret',
            'crm.url',
            'new.domain',
            'image.url'
        ];
    }
}
