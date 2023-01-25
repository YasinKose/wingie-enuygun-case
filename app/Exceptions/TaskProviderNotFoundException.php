<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class TaskProviderNotFoundException extends HttpException
{
    /**
     * @param $message
     * @param Throwable|null $previous
     * @param array $headers
     * @param $code
     */
    public function __construct($message = "Task sağlayıcısı tanımlanmadı!", Throwable $previous = null, array $headers = [], $code = 0)
    {
        parent::__construct(422, $message, $previous, $headers, $code);
    }
}
