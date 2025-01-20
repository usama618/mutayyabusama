<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tx_sitemutayyab_education.title',
        'label' => 'uid_foreign',
        'iconfile' => 'EXT:site_mutayyab/Resources/Public/Icons/Extension.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'hideTable' => true,
        'sortby' => 'sorting_foreign',
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        // records can and should be edited in workspaces
        'shadowColumnsForNewPlaceholders' => 'uid_foreign',
        'typeicon_classes' => [
            'default' => 'mimetypes-other-other',
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'security' => [
            'ignoreWebMountRestriction' => true,
            'ignoreRootLevelRestriction' => true,
            'ignorePageTypeRestriction' => true,
        ],
        'searchFields' => 'header,subheader,bodytext,link',
    ],
    'columns' => [
        'sys_language_uid' => [
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 0],
                ],
                'default' => 0,
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_sitemutayyab_education',
                'foreign_table_where' => 'AND tx_sitemutayyab_education.uid=###REC_FIELD_l10n_parent### AND tx_sitemutayyab_education.sys_language_uid IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => '',
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'uid_foreign' => [
            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tx_sitemutayyab_education.title',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tt_content',
                'size' => 1,
                'maxitems' => 1,
                'minitems' => 0,
            ],
        ],
        'sorting_foreign' => [
            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tx_sitemutayyab_education.sorting_foreign',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'max' => 4,
                'eval' => 'int',
                'checkbox' => 0,
                'range' => [
                    'upper' => 1000,
                    'lower' => 10,
                ],
                'default' => 0,
            ],
        ],
        'tablename' => [
            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_tca.xlf:tx_sitelocatec_cta.tablename',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'fieldname' => [
            'label' => 'LLL:EXT:site_locatec/Resources/Private/Language/locallang_tca.xlf:tx_sitelocatec_cta.fieldname',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'image' => [
            'label' => 'LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.image',
              'config' => [
                'type' => 'file',
                'allowed' => 'common-media-types',
            ],
        ],
        'link' => [
            'label' => 'LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 1024,
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'title' => 'LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.link',
                    ],
                ],
                'softref' => 'typolink',
            ],
        ],
        'header' => [
            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tx_sitemutayyab_education.institute',
            'config' => [
                'type' => 'input',
            ],
        ],
        'subheader' => [
            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tx_sitemutayyab_education.specialization',
            'config' => [
                'type' => 'input',
            ],
        ],
        'linklabel' => [
            'label' => 'LLL:EXT:site_mutayyab/Resources/Private/Language/locallang_db.xlf:tx_sitemutayyab_education.educationdate',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 256,
            ],
        ],
        'linkconfig' => [
            'label' => 'LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.linkconfig',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.linkconfig.I.default', 'default'],
                    ['LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.linkconfig.I.invert', 'invert'],
                    ['LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.linkconfig.I.red', 'red'],
                    ['LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.linkconfig.I.white', 'white'],
                    ['LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.linkconfig.I.transparent', 'transparent'],
                ],
                'default' => 'default',
            ],
        ],
    ],
    'palettes' => [
        'linklabel' => [
            'label' => 'LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.palettes.linklabel',
            'showitem' => 'link,linklabel',
        ],
        'linklabelconfig' => [
            'label' => 'LLL:EXT:site_locatec/Resources/Private/Language/locallang_db.xlf:tx_sitelocatec_cta.palettes.linklabel',
            'showitem' => 'link,linklabel,linkconfig',
        ],
        // additional fields palette, hidden but needs to be included all the time
        'hiddenpalette' => [
            'showitem' => 'hidden,sys_language_uid,l10n_parent',
            'isHiddenPalette' => true,
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'header, subheader, linklabel, --palette--;;hiddenpalette',
        ],
    ],
];
