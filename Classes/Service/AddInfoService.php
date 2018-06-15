<?php
namespace CGB\Relax5addinfo\Service;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Christoph Balogh <cb@lustige-informatik.at>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Various helper routines
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU protected License, version 2
 */
class AddInfoService implements \TYPO3\CMS\Core\SingletonInterface {

    /**
     * addAttributeRepository
     *
     * @var \CGB\Relax5addinfo\Domain\Repository\AddAttributeRepository
     * @inject
     */
    protected $addAttributeRepository = null;
    
    /**
     * definitionRepository
     *
     * @var \CGB\Relax5addinfo\Domain\Repository\DefinitionRepository
     * @inject
     */
    protected $definitionRepository = null;
    
    
    /**
     * 
     * @param mixed $object
     * @return array
     */
    public function loadAddInfo ($object) {
        // get additional info array
        $addInfoArray = [];
        $additionalDefinitions = $this->definitionRepository->findByParentObject(get_class($object));
        
        foreach ($additionalDefinitions as $additionalDefinition) {
            foreach($additionalDefinition->getFields() as $additionalField) {
                // generate reference in the form of /Vendor/Extension/Domain/Model/Class:<uid>.<name>
                $reference = $reference = ((string) $object) . '.' . $additionalField->getName();
            
                // get addInfo entry from repository
                $addInfoEntry = $this->addAttributeRepository->findByReference($reference);

                // if at least one entry has been found (ignore others) set value, else set to empty
                if ($addInfoEntry->count() > 0) {
                    $value = $addInfoEntry->getFirst()->getValue();
                } else {
                    $value = '';
                }
            
                // build result array
                $addInfoArray[] = [
                    'name' => $additionalField->getName(),
                    'label' => $additionalField->getLabeltext(),
                    'valueList' => $additionalField->getValueListArray(),
                    'type' => $additionalField->getType(),
                    'value' => $value,
                ];
            }
        }
        return $addInfoArray;
    }

    /**
     * 
     * @param mixed $object
     * @param mixed $request
     * @param string $varname
     * @param array $addInfoArray
     * @param \CGB\Relax5core\Domain\Model\Owner $owner
     */
    public function storeAddInfo ($object, $request, $varname = 'relax5addinfo', $addInfoArray = null, $owner = null) {
        // get additional info array
        
        if ( ($request->hasArgument($varname)) || is_array($addInfoArray) ) {
            if (! is_array($addInfoArray)) {
                $addInfoArray = $request->getArgument($varname);
            }

            // addInfo is an array 
            
            foreach ($addInfoArray as $key => $value) {
                // generate reference in the form of /Vendor/Extension/Domain/Model/Class:<uid>.<name>
                $reference = ((string) $object) . '.' . $key;
                
                $storedObjects = $this->addAttributeRepository->findByReference($reference);
                if ($storedObjects->count() == 0) {
                    // this key is not yet in the db, create a new one
                    $newAddInfo = new \CGB\Relax5addinfo\Domain\Model\AddAttribute;
                    $newAddInfo->setReference($reference);
                    $newAddInfo->setParentObject((string) $object);
                    $newAddInfo->setValue($value);
                    $newAddInfo->setOwner($owner);
                    $this->addAttributeRepository->add($newAddInfo);
                } else {
                    $addInfo = $storedObjects->getFirst();
                    $addInfo->setValue($value);
                    $this->addAttributeRepository->update($addInfo);
                }
            }
            // $persistenceManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager");
            // $persistenceManager->persistAll();
        }
    }
}
