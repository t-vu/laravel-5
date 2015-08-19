<?php

/*
 * This file is part of Laravel Vimeo.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Vimeo Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'client_id' => '0088d70ae1e7caed82ad2f10d0a8f777ae26656f',
            'client_secret' => 'eA//zkMIX3V1xCXQf1rbUFE+4N8EC/Cc3SuVIr1Q5ISKKrf1ZgDiGUkx3BxRZbPS6DtCiUDlHVZsQ4zIPNCk9UZxRNN4ZpbGvRHLENwByebNSG3tPbzKUNzsbsf/i37J',
            'access_token' => 'cd75d3c0fa20e611240cb7723a53d7b3',
        ],

        'alternative' => [
            'client_id' => 'your-client-id',
            'client_secret' => 'your-client-secret',
            'access_token' => null,
        ],

    ],

];
