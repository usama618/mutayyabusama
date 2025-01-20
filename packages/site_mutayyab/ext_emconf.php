<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Mutayyab',
    'description' => 'Site package tutorial for personal website of Mutayyab Usama',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Devstop\\SiteMutayyab\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mutayyab Usama',
    'author_email' => 'mup1715@gmail.com',
    'author_company' => 'Devstop',
    'version' => '1.0.0',
];
