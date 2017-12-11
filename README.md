QEEP Api Client
=========================

`composer require qeep-pro/qeep-api-client`

If you use Symfony, add this text in services.yaml:

```
# for auto writing as arguments in subscribers
QEEP\QEEPApiClient\ApiClient:
    alias: qeep.api-client

qeep.api-client:
    class: QEEP\QEEPApiClient\ApiClient
    arguments:
        $clientId:     '%env(QEEP_CLIENT_ID)%'
        $clientSecret: '%env(QEEP_SECRET_KEY_ID)%'
        $crmUrl:       '%env(QEEP_CRM_URL)%'
        $salesChannel: '%env(QEEP_SALES_CHANNEL)%'
        $imageUrl:     '%env(QEEP_IMAGE_URL)%'
    public:     true
```

For APIv2 client:

```
# for auto writing as arguments in subscribers
QEEP\QEEPApiClient\V2\ApiClient:
    alias: qeep.api-v2-client

qeep.api-v2-client:
    class: QEEP\QEEPApiClient\V2\ApiClient
    arguments:
        $clientId:     '%env(QEEP_CLIENT_ID)%'
        $clientSecret: '%env(QEEP_SECRET_KEY_ID)%'
        $crmUrl:       '%env(QEEP_CRM_URL)%'
        $salesChannel: '%env(QEEP_SALES_CHANNEL)%'
        $imageUrl:     '%env(QEEP_IMAGE_URL)%'
    public:     true
```