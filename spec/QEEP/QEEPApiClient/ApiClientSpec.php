<?php

namespace spec\QEEP\QEEPApiClient;

use phpmock\environment\MockEnvironment;
use phpmock\MockBuilder;
use phpmock\MockEnabledException;
use PhpSpec\ObjectBehavior;
use QEEP\QEEPApiClient\Model\Order;

class ApiClientSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->beConstructedWith(...$this->getApiClientParams());
    }

    public function it_is_able_to_create_order()
    {
        $order = new Order();
        $basket = [[ 'code' => 178, 'amount' => 2, 'price' => 100 ]];

        $order->setBuyerName('Иван');
        $order->setBuyerPhone('+7 (999) 999-99-99');
        $order->setDeliveryType('pickup');
        $order->setSalesPoint(1);
        $order->setPurchases($basket);

        $mockCurl = $this->buildMockCurl('
            {
                "status": "success",
                "orderId": 1
            }
        ');

        $this->beConstructedWith(...$this->getApiClientParams());

        $result = $this->createOrder($order);

        $result->shouldHaveKey('status');
        $result['status']->shouldBe('success');
        $result->shouldHaveKey('orderId');
        $result['orderId']->shouldBeInteger();

        $mockCurl->disable();
    }

    public function it_is_able_to_cancel_order()
    {
        $mockCurl = $this->buildMockCurl('
            {
                "status": "success"
            }
        ');

        $this->beConstructedWith(...$this->getApiClientParams());
        $result = $this->cancelOrder(1);

        $result->shouldHaveKey('status');
        $result['status']->shouldBe('success');

        $mockCurl->disable();
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

    private function buildMockCurl(string $execReturn): MockEnvironment
    {
        $builder = new MockBuilder();

        $mockExec = $builder
            ->setNamespace('QEEP\QEEPApiClient')
            ->setName("curl_exec")
            ->setFunction(
                function ($_) use ($execReturn) {
                    return $execReturn;
                }
            )
            ->build();

        $mockInfo = $builder
            ->setNamespace('QEEP\QEEPApiClient')
            ->setName('curl_getinfo')
            ->setFunction(function ($_) {
                return 200;
            })
            ->build();

        $mockError = $builder
            ->setNamespace('QEEP\QEEPApiClient')
            ->setName('curl_error')
            ->setFunction(function($_) {
                return null;
            })
            ->build();

        $env =  new MockEnvironment([
            $mockExec,
            $mockInfo,
            $mockError,
        ]);

        $env->enable();

        return $env;
    }
}
