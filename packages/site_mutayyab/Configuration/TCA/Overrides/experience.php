<?php

defined('TYPO3') or die();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:CType.experience',
        'experience',
        'intro',
        'Mutayyab',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['experience'] = 'blog-authors';




$GLOBALS['TCA']['tt_content']['types']['experience'] = [
    'showitem' => 'header, subheader, tx_listelements_list,tx_sitemutayyab_education_items,',
    'columnsOverrides' => [
        'tx_listelements_list' => [
            'label' => 'Experience',
            'config' => [
                'overrideChildTca' => [
                    'types' => [
                        'experience' => [
                            'showitem' => 'header, subheader, linklabel, bodytext, --palette--;;hiddenpalette',
                        ],
                    ],
                    'columns' => [
                        'header' =>  [
                            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tt_content.company',
                        ],
                        'subheader' => [
                            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tt_content.role',
                        ],
                        'linklabel' => [
                            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tt_content.duration',
                        ],
                        'bodytext' => [
                            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tt_content.jobdescription',
                        ],
                    ],
                ],
            ],
        ],
        'tx_sitemutayyab_education_items' => [
            'label' => 'Education',
            'config' => [
                'overrideChildTca' => [
                    'types' => [
                        '0' => [
                            'showitem' => 'header, subheader, linklabel,',
                        ],
                    ],
                ],
             
            ],
        ],
    ],
];


