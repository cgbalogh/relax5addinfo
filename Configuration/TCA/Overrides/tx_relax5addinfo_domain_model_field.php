<?php

$GLOBALS['TCA']['tx_relax5addinfo_domain_model_field']['columns']['type'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_field.type',
    'config' => array(
        'type' => 'select',
        'items' => '',
        'renderType' => 'selectSingle',
        'size' => 1,
        'maxitems' => 1,
    ),
);

/**
 * adjust select values for gender
 */
$GLOBALS['TCA']['tx_relax5addinfo_domain_model_field']['columns']['type']['config']['items'] = array(
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.select_from_list', 0),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.textfield', 'textfield'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.textarea', 'textarea'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.select', 'select'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.selectexpandable', 'selectexpandable'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.checkbox', 'checkbox'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.optiongroup', 'optiongroup'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.date', 'date'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.datetime', 'datetime'),
    array('LLL:EXT:relax5addinfo/Resources/Private/Language/locallang.xlf:tx_relax5addinfo_domain_model_field.type.time', 'time'),
);
