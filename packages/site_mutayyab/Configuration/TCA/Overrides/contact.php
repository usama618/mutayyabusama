<?php

defined('TYPO3') or die();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:CType.contact',
        'contact',
        'textmedia',
        'Mutayyab',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['contact'] = 'blog-authors';




$GLOBALS['TCA']['tt_content']['types']['contact'] = [
    'showitem' => 'header, subheader, email, phone, tx_listelements_list,',
    'columnsOverrides' => [
        'tx_listelements_list' => [
            'label' => 'Social Media Links',
            'config' => [
                'overrideChildTca' => [
                    'types' => [
                        'contact' => [
                            'showitem' => 'linklabel, link, --palette--;;hiddenpalette',
                        ],
                    ],
                ],
            ],
        ],

    ],
];


