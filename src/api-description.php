<?php return [
    'baseUrl' => 'http://zxcvbn',
    'operations' => [
        'GetFull' => [
            'httpMethod' => 'POST',
            'uri' => '/zxcvbn',
            'responseModel' => 'Result',
            'parameters' => [
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
        'GetScore' => [
            'httpMethod' => 'POST',
            'uri' => '/zxcvbn/score',
            'responseModel' => 'Result',
            'parameters' => [
                'password' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ],
            ],
        ],
    ],
    'models' => [
        'Result' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => ['location' => 'statusCode'],
            ],
            'additionalProperties' => [
                'location' => 'json'
            ],
        ]
    ],
];