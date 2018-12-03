<?php

namespace Ejabberd\Exceptions;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Throwable;

class EjabberdException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public static function networkException(GuzzleException $exception)
    {
        return new EjabberdException('Network exception', $exception->getCode(), $exception);
    }

    public static function generalException(Exception $exception)
    {
        return new EjabberdException('An error occurred', $exception->getCode(), $exception);
    }
}