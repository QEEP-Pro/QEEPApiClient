<?php

namespace spec\QEEP\QEEPApiClient;

use QEEP\QEEPApiClient\ApiClient;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use QEEP\QEEPApiClient\Model\OrderStatus;

class ApiClientSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $client = new ApiClient(...$this->getApiClientParams());
    }

    private function getApiClientParams()
    {
        return [1, 'secret', 'crm url', 'channel', 'image url'];
    }
}
