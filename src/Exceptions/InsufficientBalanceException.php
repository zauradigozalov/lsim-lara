<?php

namespace zauradigozalov\LsimSms\Exceptions;

use Exception;

class InsufficientBalanceException extends Exception
{
    /**
     * @var string
     */
    protected $message = 'Kifayət qədər balans yoxdur.';

    /**
     * @var int
     */
    protected $code = 403;
}
