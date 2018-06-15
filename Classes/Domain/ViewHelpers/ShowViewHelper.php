<?php
namespace CGB\Relax5addinfo\ViewHelpers;

/***************************************************************
*  Copyright notice
*
*  (c) 2011 Christoph Balogh <cb@lustige-informatik.at>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General protected License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General protected License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General protected License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Viewhelper
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU protected License, version 2
 */
class ShowViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    
    /**
     * addAttributeRepository
     *
     * @var \CGB\Relax5addinfo\Domain\Repository\AddAttributeRepository
     * @inject
     */
    protected $addAttributeRepository = null;

    /**
     * addInfoServiceService
     *
     * @var \CGB\Relax5addinfo\Service\AddInfoService
     * @inject
     */
    protected $addInfoService = null;
    
	/**
	* @param mixed $value
	* @param string $type
    * @param \CGB\Relax5addinfo\Domain\Model\Field $field
	* @return string
	*/
	public function render ($value = null, $type = '', \CGB\Relax5addinfo\Domain\Model\Field $field = null) {
        // get additional info array
        switch($type) {
            case 'date':
                $date = new \DateTime;
                $date->setTimestamp((int) $value);
                return $date->format(\TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:relax5core/Resources/Private/Language/locallang.xml:tx_relax5core_general.date_format', 'relax5core'));

            case 'checkbox':
                return $value ? 
                    \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:relax5core/Resources/Private/Language/locallang.xml:tx_relax5core_general.yes', 'relax5core') : 
                    \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('LLL:EXT:relax5core/Resources/Private/Language/locallang.xml:tx_relax5core_general.no', 'relax5core');

                
            case 'optiongroup':
                if ($field && $field->isStoreKeyOnly()) {
                    $valueListArray = $field->getValueListArray();
                    foreach ($valueListArray as $singleValue) {
                        if ($singleValue['value'] == $value) {
                            return $singleValue['label'];
                        }
                    }
                } else {
                    return $value;
                }
        }
        return $value;
	}

}
?>