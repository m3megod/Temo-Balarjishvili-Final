<?php

return [

    'dsn' => env('SENTRY_LARAVEL_DSN', env('SENTRY_DSN')),


    'environment' => env('SENTRY_ENVIRONMENT'),

    'breadcrumbs' => [
       
        'logs' => true,

        
        'sql_queries' => true,

     
        'sql_bindings' => true,

       
        'queue_info' => true,

       
        'command_info' => true,
    ],

    
    'send_default_pii' => false,

    'traces_sample_rate' => (float)(env('SENTRY_TRACES_SAMPLE_RATE', 0.0)),

    'controllers_base_namespace' => env('SENTRY_CONTROLLERS_BASE_NAMESPACE', 'App\\Http\\Controllers'),

];
