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
class AddInfoViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    
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
	* @param mixed $object
	* @param string $identifier
    * @ignorevalidation $identifier
	* @return string
	*/
	public function render ($object = null, $identifier = '') {
        // get additional info array
        if ($identifier == '') {
            $additionalDefinitions = (string) $object;
            return $this->addAttributeRepository->findByParentObject($additionalDefinitions);
        } else {
            $additionalDefinitions = (string) $object;
            return $this->addAttributeRepository->findByReference($additionalDefinitions . ".$identifier" );
        }
	}

}
?>