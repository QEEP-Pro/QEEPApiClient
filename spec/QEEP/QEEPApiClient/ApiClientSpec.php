<?php

namespace spec\QEEP\QEEPApiClient;

use QEEP\QEEPApiClient\ApiClient;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiClientSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->beConstructedWith(1, '', '', '', '');
        $this->shouldHaveType(ApiClient::class);
    }
}
