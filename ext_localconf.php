<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CGB.Relax5addinfo',
            'Addinfo',
            [
                'AddAttribute' => 'list, edit, update'
            ],
            // non-cacheable actions
            [
                'AddAttribute' => 'list, edit, update'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CGB.Relax5addinfo',
            'Ajax',
            [
                'Addinfo' => 'list'
            ],
            // non-cacheable actions
            [
                'Addinfo' => 'list'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    addinfo {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('relax5addinfo') . 'Resources/Public/Icons/user_plugin_addinfo.svg
                        title = LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addinfo
                        description = LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addinfo.description
                        tt_content_defValues {
                            CType = list
                            list_type = relax5addinfo_addinfo
                        }
                    }
                    ajax {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('relax5addinfo') . 'Resources/Public/Icons/user_plugin_ajax.svg
                        title = LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_ajax
                        description = LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_ajax.description
                        tt_content_defValues {
                            CType = list
                            list_type = relax5addinfo_ajax
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
  'relax5-icon-addinfo',
  \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
  ['source' => 'EXT:relax5addinfo/Resources/Public/Images/relax-icon-addinfo.png']
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod {
        wizards.newContentElement.wizardItems.plugins {
            elements {
                addinfo >
                ajax >
            }
        }
        wizards.newContentElement.wizardItems.relax5 {
            elements {
                addinfo {
                    icon >
                    iconIdentifier = relax5-icon-addinfo
                    title = LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addinfo.ce
                    description = LLL:EXT:relax5addinfo/Resources/Private/Language/locallang_db.xlf:tx_relax5addinfo_domain_model_addinfo.description.ce
                    tt_content_defValues {
                        CType = list
                        list_type = relax5addinfo_ajax
                    }
                }
            }
            show = *
        }
   }'
);