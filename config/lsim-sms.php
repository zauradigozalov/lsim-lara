<?php

return [

    'login' => env('LSIM_LOGIN', 'lsim'),
    'password' => env('LSIM_PASSWORD', 'password'),
    'sender' => env('LSIM_SENDER', 'lsim'),

    'debug' => env('LSIM_DEBUG',false),

    'notifiable'=>[
        'enabled'=> env('LSIM_NOTIFIABLE_ENABLED',false),

        /*
         *  Nümunə: +994XXYYYZZGG
        */
        'phone'=> env('LSIM_NOTIFIABLE_NUMBER',null),

        'message'=> env('LSIM_NOTIFIABLE_MESSAGE', 'Sizin LSIM balansınız bitmişdir!')
    ]
];