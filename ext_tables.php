<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('relax5addinfo', 'Configuration/TypoScript', 'relax5addinfo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5addinfo_domain_model_addattribute', 'EXT:relax5addinfo/Resources/Private/Language/locallang_csh_tx_relax5addinfo_domain_model_addattribute.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5addinfo_domain_model_addattribute');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5addinfo_domain_model_definition', 'EXT:relax5addinfo/Resources/Private/Language/locallang_csh_tx_relax5addinfo_domain_model_definition.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5addinfo_domain_model_definition');

    }
);
