<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'rage',
    'description' => 'TYPO3 Rage Website Template',
    'version' => '0.0.1',
    'state' => 'alpha',
    'category' => 'template',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Daniel Schultheis',
    'author_email' => 'd.schultheis@kabel-salat.net',
    'autoload' => [
        'psr-4' => [
            'Dachande\\Rage\\' => 'Classes',
        ],
    ],
];
