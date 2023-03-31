<?php

namespace zauradigozalov\LsimSms\Exceptions;

use Exception;

class InvalidMethodException extends Exception
{
    /**
     * @var string
     */
    protected $message = 'Sorğu metodu səhvdir. Mümkün metodlar: GET, POST';

    /**
     * @var int
     */
    protected $code = 403;
}
