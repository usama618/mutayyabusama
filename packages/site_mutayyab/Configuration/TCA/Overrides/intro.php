<?php

defined('TYPO3') or die();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:CType.intro',
        'intro',
        'textmedia',
        'Mutayyab',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['intro'] = 'blog-authors';




$GLOBALS['TCA']['tt_content']['types']['intro'] = [
    'showitem' => 'header, bodytext, tx_listelements_list,',
    'columnsOverrides' => [
        'tx_listelements_list' => [
            'label' => 'Social Media Links',
            'config' => [
                'overrideChildTca' => [
                    'types' => [
                        'intro' => [
                            'showitem' => 'linklabel, link, --palette--;;hiddenpalette',
                        ],
                    ],
                ],
            ],
        ],
    ],
];


