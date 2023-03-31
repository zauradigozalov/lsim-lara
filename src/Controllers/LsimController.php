<?php

namespace zauradigozalov\LsimSms\Controllers;

use App\Http\Controllers\Controller;
use zauradigozalov\LsimSms\Traits\Quickable;
use zauradigozalov\LsimSms\Traits\Requestable;

class LsimController extends Controller
{
    use Requestable, Quickable {
        Quickable::__construct as private quickableConstruct;
        Requestable::__construct as private requestableConstruct;
    }

    private $debug;

    public function __construct()
    {
        $this->debug = config('lsim-sms.debug');
        $this->requestableConstruct();
        $this->quickableConstruct();
    }
}