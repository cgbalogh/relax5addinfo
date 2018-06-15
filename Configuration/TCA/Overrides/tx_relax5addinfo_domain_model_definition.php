<?php
$GLOBALS['TCA']['tx_relax5addinfo_domain_model_definition']['columns']['parent_object'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_definition.parent_object',
    'config' => array(
        'type' => 'select',
        'itemsProcFunc' => 'CGB\Relax5validator\UserFunc\TcaUserFunc->getDomainModelObjects',
        'renderType' => 'selectSingle',
        'size' => 1,
        'maxitems' => 1,
    ),
);

$GLOBALS['TCA']['tx_relax5addinfo_domain_model_definition']['columns']['fields']['config']['appearance']['collapseAll'] = 1;
