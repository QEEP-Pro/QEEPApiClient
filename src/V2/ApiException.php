<?php

namespace QEEP\QEEPApiClient\V2;


use Throwable;

class ApiException extends \Exception
{
    private $curlError;

    private $apiErrorCode;

    private $apiParams;

    public function __construct(
        $curlError,
        $apiErrorCode,
        $apiParams,
        string $message = "",
        int $code = 0,
        Throwable $previous = null
    )
    {
        parent::__construct($message, $code, $previous);

        $this->curlError = $curlError;
        $this->apiErrorCode = $apiErrorCode;
        $this->apiParams = $apiParams;
    }

    public function getCurlError()
    {
        return $this->curlError;
    }

    public function getApiErrorCode()
    {
        return $this->apiErrorCode;
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}
