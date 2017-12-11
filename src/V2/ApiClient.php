<?php

namespace QEEP\QEEPApiClient\V2;


use QEEP\QEEPApiClient\V2\Model\CustomQuestion;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ApiClient
{
    const API_ROUTE_PREFIX = '/api/v2/';

    const API_IMAGE_PREFIX = 'images.';

    private $clientId;

    private $clientSecret;

    private $url;

    private $salesChannel;

    private $imageUrl;

    private $serializer;

    public function __construct(
        int $clientId,
        string $clientSecret,
        string $crmUrl,
        string $salesChannel,
        string $imageUrl
    )
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->url = $crmUrl;
        $this->salesChannel = $salesChannel;
        $this->imageUrl = $imageUrl;

        $this->serializer = new Serializer(
            [new ObjectNormalizer()],
            [new JsonEncoder()]
        );
    }

    /** @return CustomQuestion[] */
    public function getCustomQuestions() : array
    {
        $rawQuestions = $this->callApiV2Method('questions/get');

        $questions = [];
        foreach ($rawQuestions as $rawQuestion) {
            $questions[] = $this
                ->serializer
                ->denormalize($rawQuestion, CustomQuestion::class);
        }

        return $questions;
    }

    private function callApiV2Method(
        string $urlSuffix,
        array $params = [],
        string $method = HTTP_METH_GET
    )
    {
        $params = http_build_query($params + $this->getAuthParams($params));
        $ch = curl_init();
        $url = $this->url . self::API_ROUTE_PREFIX . $urlSuffix;

        switch ($method) {
            case HTTP_METH_GET:
                if ($params) {
                    $url .= '?' . $params;
                }
                break;
            case HTTP_METH_POST:
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                break;
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($error || $code != 200) {
            throw new ApiException($error, $code, $params);
        }

        return json_decode($response, true);
    }

    private function getAuthParams(array $params) : array
    {
        ksort($params);
        $paramsString = '';
        foreach ($params as $param) {
            if (is_scalar($param)) {
                $paramsString .= $param;
            }
        }

        return [
            'client_id' => $this->clientId,
            'access_token' => md5($this->clientId . $this->clientSecret . $paramsString),
        ];
    }
}