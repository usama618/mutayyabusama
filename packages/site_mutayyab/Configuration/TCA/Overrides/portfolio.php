<?php

defined('TYPO3') or die();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:CType.portfolio',
        'portfolio',
        'textmedia',
        'Mutayyab',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['portfolio'] = 'blog-authors';




$GLOBALS['TCA']['tt_content']['types']['portfolio'] = [
    'showitem' => 'header, subheader, tx_listelements_list',
    'columnsOverrides' => [
        'tx_listelements_list' => [
            'label' => 'Portfolio',
            'config' => [
                'overrideChildTca' => [
                    'types' => [
                        'portfolio' => [
                            'showitem' => 'header, linklabel, link, bodytext, images, --palette--;;hiddenpalette',
                        ],
                    ],
                ],
            ],
        ],
    ],
];


