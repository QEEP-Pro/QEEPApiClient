<?php

namespace spec\QEEP\QEEPApiClient\V2;

use phpmock\environment\MockEnvironment;
use phpmock\MockBuilder;
use phpmock\MockEnabledException;
use PhpSpec\ObjectBehavior;
use QEEP\QEEPApiClient\V2\Model\CompanyContact;
use QEEP\QEEPApiClient\V2\Model\CompanyInfo;
use QEEP\QEEPApiClient\V2\Model\CustomQuestion;
use QEEP\QEEPApiClient\V2\Model\DeliveryInterval;
use QEEP\QEEPApiClient\V2\Model\GroupModifier;
use QEEP\QEEPApiClient\V2\Model\Product;
use QEEP\QEEPApiClient\V2\Model\SocialLink;
use QEEP\QEEPApiClient\V2\Model\Variant;

class ApiClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(...$this->getApiClientParams());
    }

    function it_is_able_to_return_custom_questions()
    {
        $mockCurl = $this->buildMockCurl(
            '[
                {
		            "answers": ["12-13"],
		            "name": "Время вашей доставки",
		            "body": "В котором часу доставить?",
		            "id": 1
	            }
	        ]'
        );

        $this->beConstructedWith(...$this->getApiClientParams());

        $this->getCustomQuestions()->shouldBeLike([
            (new CustomQuestion())
                ->setId(1)
                ->setName("Время вашей доставки")
                ->setBody("В котором часу доставить?")
                ->setAnswers(["12-13"])
        ]);

        $mockCurl->disable();
    }

    function it_is_able_to_return_cities()
    {
        $mockCurl = $this->buildMockCurl(
            '["Томск", "Николаев"]'
        );

        $this->beConstructedWith(...$this->getApiClientParams());
        $this->getCities()->shouldReturn(['Томск', 'Николаев']);

        $mockCurl->disable();
    }

    function it_is_able_to_return_social_links()
    {
        $mockCurl = $this->buildMockCurl(
            '[
	            {
		            "id": 1,
		            "key": "vk",
		            "value": "vk.com/group",
		            "customName": "Vk"
	            }
	        ]'
        );

        $this->beConstructedWith(...$this->getApiClientParams());
        $this->getSocialLinks()->shouldBeLike([
            (new SocialLink())
                ->setKey("vk")
                ->setValue("vk.com/group")
        ]);

        $mockCurl->disable();
    }

    function it_is_able_to_return_contacts()
    {
        $mockCurl = $this->buildMockCurl(
            '[
	            {
		            "key": "address",
		            "value": "517400, Саратовская область, город Одинцово, пер. Ладыгина, 51"
	            }
	        ]'
        );

        $this->beConstructedWith(...$this->getApiClientParams());
        $this->getContacts()->shouldBeLike([
            (new CompanyContact())
                ->setKey("address")
                ->setValue("517400, Саратовская область, город Одинцово, пер. Ладыгина, 51")
        ]);

        $mockCurl->disable();
    }

    function it_is_able_to_return_company_info()
    {
        $mockCurl = $this->buildMockCurl(
            '[
	            {
		            "key": "delivery",
		            "value": "!Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития. Разнообразный и богатый опыт начало повседневной работы по формированию позиции играет важную роль в формировании модели развития."
	            }
	        ]'
        );

        $this->beConstructedWith(...$this->getApiClientParams());
        $this->getInfo()->shouldBeLike([
            (new CompanyInfo())
                ->setKey("delivery")
                ->setValue("!Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития. Разнообразный и богатый опыт начало повседневной работы по формированию позиции играет важную роль в формировании модели развития.")
        ]);

        $mockCurl->disable();
    }

    function it_is_able_to_get_delivery_minute() {
        $mockCurl = $this->buildMockCurl(
            '[
               {
                  "minuteFrom": 1,
                  "minuteTo": 2,
                  }
            ]'
        );

        $this->beConstructedWith(...$this->getApiClientParams());
        $this->getDeliveryIntervals()->shouldBeLike([
            (new DeliveryInterval())
                ->setMinuteFrom(1)
                ->setMinuteTo(2)
        ]);

        $mockCurl->disable();
    }

    function it_is_able_to_get_group_modifiers_for_variants()
    {
        $mockCurl = $this->buildMockCurl(
            '[
               {
                  "variants":[
                     {
                        "id":1,
                        "sku":"333",
                        "groupModifiers":[
                           {
                              "id":303,
                              "maxAmount":10,
                              "minAmount":0,
                              "defaultAmount":null,
                              "title":"Добавки",
                              "modifiers":[
                                 {
                                    "name":"Сыр чеддер  16 гр",
                                    "price":35,
                                    "quantity":null,
                                    "description":"",
                                    "body":null,
                                    "sku":"01190",
                                    "modifiers":[
                                       
                                    ],
                                    "id":77,
                                    "_route":"variant/56729",
                                    "_entity":"variant",
                                    "_full":false,
                                    "_deletable":true,
                                    "_timestamp":1630132718
                                 }
                              ]
                           }
                        ]
                     }
                  ]
               }
            ]'
        );

        $this->beConstructedWith(...$this->getApiClientParams());
        $this->getProducts()->shouldBeLike([
            (new Product())
                ->setVariants(
                    [(new Variant())
                        ->setId(1)
                        ->setSku(333)
                        ->setGroupModifiers(
                            [(new GroupModifier())
                                ->setId(303)
                                ->setMaxAmount(10)
                                ->setMinAmount(0)
                                ->setDefaultAmount(null)
                                ->setTitle('Добавки')
                                ->setModifiers([(new Variant())
                                    ->setSku('01190')
                                    ->setId(77)
                                    ->setName('Сыр чеддер  16 гр')
                                    ->setPrice(35)
                                ])
                            ])
                    ]
                )
        ]);

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
        $builder = new MockBuilder();

        $mockExec = $builder
            ->setNamespace('QEEP\QEEPApiClient\V2')
            ->setName("curl_exec")
            ->setFunction(
                function ($_) use ($execReturn) {
                    return $execReturn;
                }
            )
            ->build();

        $mockInfo = $builder
            ->setNamespace('QEEP\QEEPApiClient\V2')
            ->setName('curl_getinfo')
            ->setFunction(function ($_) {
                return 200;
            })
            ->build();

        $mockError = $builder
            ->setNamespace('QEEP\QEEPApiClient\V2')
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

        try {
            $env->enable();
        } catch (MockEnabledException $e) {
            $env->disable();
            $env->enable();
        }

        return $env;
    }
}
