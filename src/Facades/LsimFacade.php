<?php

namespace zauradigozalov\LsimSms\Facades;

use Illuminate\Support\Facades\Facade;

class LsimFacade  extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lsim-sms';
    }
}