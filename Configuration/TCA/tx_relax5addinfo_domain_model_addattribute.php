<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute',
        'label' => 'parent_object',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'parent_object,reference,value,permissions,owner,usergroup,definition',
        'iconfile' => 'EXT:relax5addinfo/Resources/Public/Icons/tx_relax5addinfo_domain_model_addattribute.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, parent_object, reference, value, permissions, owner, usergroup, definition',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, parent_object, reference, value, permissions, owner, usergroup, definition, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_relax5addinfo_domain_model_addattribute',
                'foreign_table_where' => 'AND tx_relax5addinfo_domain_model_addattribute.pid=###CURRENT_PID### AND tx_relax5addinfo_domain_model_addattribute.sys_language_uid IN (-1,0)',
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
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'parent_object' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute.parent_object',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'reference' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute.reference',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute.value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'permissions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute.permissions',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'owner' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute.owner',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'fe_users',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'usergroup' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute.usergroup',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'fe_groups',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'definition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addattribute.definition',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_relax5addinfo_domain_model_definition',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    
    ],
];
