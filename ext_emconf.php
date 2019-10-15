<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (uk)',
    'description' => 'Ukrainian (uk) language pack for the Static Info Tables providing localized names for countries.',
    'category' => 'misc',
    'version' => '6.7.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Florian Wessels',
    'author_email' => 'typo3-ext@bitmotion.de',
    'author_company' => 'Bitmotion GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'php' => '7.0.0-0.0.0',
            'static_info_tables' => '6.7.0-6.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Bitmotion\\StaticInfoTablesUk\\' => 'Classes'
        ]
    ]
];
