QEEP Api Client
=========================

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
