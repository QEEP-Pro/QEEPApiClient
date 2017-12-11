<?php

namespace QEEP\QEEPApiClient\V2;


use Throwable;

class ApiException extends \Exception
{
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
    }
}
