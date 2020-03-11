<?php

return array(

    /**
     * Rest client environment for selecting services
     * Available: 'production', 'dev'
     */
    'environment' => env('REST_CLIENT_ENV', 'dev'),

    /**
     * Debug mode for showing logs
     */
    'debug_mode' => env('APP_DEBUG', false),

    /**
     * Access Token cache time
     * Set 0 to disable cache of access tokens
     */
    'oauth_tokens_cache_minutes' => 10,

    /**
     * Access Toke type
     * Options are password | client_credentials | authorization_code | refresh_token
     */
    'grant_type' => 'password',

    /**
     *  Guzzle Client Config
     */
    'guzzle_client_config' => [
        'timeout' => 29.0,      // Request timeout: 29 secs
    ],

    /**
     * Shared config for services
     */
    'shared_service_config' => [

        'headers' => [
            'User-Agent' => 'daxvir-testing/1.0',
        ],

        'api_url' => 'http://api:8080/',

        'oauth2_credentials' => [
            'username' => 'virendrajadeja@esense.in',
            'password' => '123456789',
            'client_id' => 5,
            'client_secret' => 'MQsTd6jKVXkdYXR7T4FqJLmPyGkbHqzEJZNh0Znx'
        ],

        'oauth2_access_token_url' => 'oauth/token',

        'oauth2_grant_types' => [
            'client_credentials' => 'client_credentials',
            'authorization_code' => 'authorization_code',
            'refresh_token' => 'refresh_token',
            'password' => 'password',
        ],

    ],

    /**
     * Default Service
     */
    'default_service_name' => 'daxvir-starter',

    /**
     * Services
     */
    'services' => [
        // environment: dev
        'dev' => [
            'local' => [
                'base_uri' => 'http://api:8080/api/',
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ],

            'daxvir-starter' => [
                'base_uri' => 'http://api:8080/api/',
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
            ],
        ],
        // environment: production
        'production' => [
            'daxvir-starter' => [
                'base_uri' => 'http://api:8080/api/',
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
            ],
        ],
    ],

);
