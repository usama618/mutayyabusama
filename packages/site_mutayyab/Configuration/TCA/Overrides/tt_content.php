<?php

// clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
// PageTSConfig (instead of a combination of altLabels and addItems
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// save a default configuration for showitems to use in our own content elements
$showItemParts = explode(
    '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,',
    $GLOBALS['TCA']['tt_content']['types']['textmedia']['showitem']
);

// Add additional columns to tt_content table.
$additionalColumns = [
    // add field for saving the list of elements for a list or a slider
    'tx_sitemutayyab_education_items' => [
        'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tt_content.tx_sitemutayyab_education_items',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_sitemutayyab_education',
            'foreign_field' => 'uid_foreign',
            'foreign_table_field' => 'tablename',
            'foreign_match_fields' => [
                'fieldname' => 'tx_sitemutayyab_education_items',
            ],
            'appearance' => [
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'expandSingle' => true,
                'newRecordLinkAddTitle' => false,
                'useSortable' => true,
                'useCombination' => false,
            ],
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);