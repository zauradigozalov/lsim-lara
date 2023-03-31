<?php

namespace zauradigozalov\LsimSms\Exceptions;

use Exception;

class InvalidNotifiableCredentialsException extends Exception
{
    /**
     * @var string
     */
    protected $message = 'Bildiriş göndəriləcək nömrə və mesaj əlavə edilməyib';

    /**
     * @var int
     */
    protected $code = 403;
}
