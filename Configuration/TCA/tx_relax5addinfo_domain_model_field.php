<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'name,description,label_text,type,value_list,add_text,eval,store_key_only',
        'iconfile' => 'EXT:relax5addinfo/Resources/Public/Icons/tx_relax5addinfo_domain_model_field.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, label_text, type, value_list, add_text, eval, store_key_only',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, description, label_text, type, value_list, add_text, eval, store_key_only'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_relax5addinfo_domain_model_field',
                'foreign_table_where' => 'AND tx_relax5addinfo_domain_model_field.pid=###CURRENT_PID### AND tx_relax5addinfo_domain_model_field.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'label_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.label_text',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'value_list' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.value_list',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'add_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.add_text',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'eval' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.eval',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'store_key_only' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.store_key_only',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
    
        'definition' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
