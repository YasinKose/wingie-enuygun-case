<?php

namespace App\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class AvailableDeveloperNotFoundException extends HttpException
{
    public function __construct($message = "Müsait geliştirici bulunamadı!", Throwable $previous = null, array $headers = [], $code = 0)
    {
        parent::__construct(422, $message, $previous, $headers, $code);
    }
}
