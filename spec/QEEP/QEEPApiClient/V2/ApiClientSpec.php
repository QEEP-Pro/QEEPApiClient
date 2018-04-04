<?php

namespace spec\QEEP\QEEPApiClient\V2;

use phpmock\environment\MockEnvironment;
use QEEP\QEEPApiClient\V2\ApiClient;
use PhpSpec\ObjectBehavior;
use phpmock\MockBuilder;

class ApiClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(...$this->getApiClientParams());
    }

    function it_is_able_to_return_cities()
    {
        $mockCurl = $this->buildMockCurl(
            '["Томск", "Николаев"]'
        );

        $mockCurl->enable();

        $this->beConstructedWith(...$this->getApiClientParams());
        $this->getCities()->shouldReturn(['Томск', 'Николаев']);

        $mockCurl->disable();
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

    private function buildMockCurl(string $execReturn): MockEnvironment
    {
        $mockEnvironment = new MockEnvironment();

        $builder = new MockBuilder();

        $builder->setNamespace('QEEP\QEEPApiClient\V2')
            ->setName("curl_exec")
            ->setFunction(
                function ($_) use ($execReturn) {
                    return $execReturn;
                }
            );

        $mockExec = $builder->build();
        $mockEnvironment->addMock($mockExec);

        $builder->setNamespace('QEEP\QEEPApiClient\V2')
            ->setName('curl_getinfo')
            ->setFunction(function ($_) {
                return 200;
            });

        $mockInfo = $builder->build();
        $mockEnvironment->addMock($mockInfo);
        $builder->setNamespace('QEEP\QEEPApiClient\V2')
            ->setName('curl_error')
            ->setFunction(function($_) {
                return null;
            });

        $mockError = $builder->build();
        $mockEnvironment->addMock($mockError);

        return $mockEnvironment;
    }
}
