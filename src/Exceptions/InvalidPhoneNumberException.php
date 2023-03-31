<?php

namespace zauradigozalov\LsimSms\Exceptions;

use Exception;

class InvalidPhoneNumberException extends Exception
{
    /**
     * @var string
     */
    protected $message = 'Telefon nömrəsi səhvdir. Doğru nümunə: +994XXYYYZZGG';

    /**
     * @var int
     */
    protected $code = 403;
}
