<?php
namespace CGB\Relax5addinfo\Domain\Model;

/***
 *
 * This file is part of the "relax5addinfo" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Christoph Balogh <cb@lustige-informatik.at>
 *
 ***/

/**
 * Definition
 */
class Definition extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * parentObject
     *
     * @var string
     */
    protected $parentObject = '';

    /**
     * Fields
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5addinfo\Domain\Model\Field>
     * @cascade remove
     */
    protected $fields = null;

    /**
     *
     * @var string $labelText 
     */
    protected $labelText = '';
    
    /**
     * Returns the valueList as array
     *
     * @return array
     */
    public function getValueListArray()
    {
        if ($this->type == 'select') {
            $list[] = ['label' => '', 'value' => 0];
        }
        $options = array_unique(\TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $this->valueList, 1));
        foreach ($options as $key => $option) {
            $list[] = [
                'value' => $this->storeKeyOnly ? $key + 1 : $option,
                'label' => $option
            ];
        }
        if ($this->isAddText()) {
            $list[] = ['label' => \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('tx_relax5addinfo_model_definition.add_text', 'relax5addinfo'), 'value' => '+'];
        }
        return $list;
    }

    /**
     * Returns the boolean state of addText
     *
     * @return bool
     */
    public function isAddText()
    {
        return $this->addText;
    }

    /**
     * @return string
     */
    function getParentObject()
    {
        return $this->parentObject;
    }

    /**
     * @param string $parentObject
     */
    function setParentObject($parentObject)
    {
        $this->parentObject = $parentObject;
    }

    /**
     * Returns the boolean state of storeKeyOnly
     *
     * @return bool
     */
    public function isStoreKeyOnly()
    {
        return $this->storeKeyOnly;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->fields = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Field
     *
     * @param \CGB\Relax5addinfo\Domain\Model\Field $field
     * @return void
     */
    public function addField(\CGB\Relax5addinfo\Domain\Model\Field $field)
    {
        $this->fields->attach($field);
    }

    /**
     * Removes a Field
     *
     * @param \CGB\Relax5addinfo\Domain\Model\Field $fieldToRemove The Field to be removed
     * @return void
     */
    public function removeField(\CGB\Relax5addinfo\Domain\Model\Field $fieldToRemove)
    {
        $this->fields->detach($fieldToRemove);
    }

    /**
     * Returns the fields
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5addinfo\Domain\Model\Field> $fields
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets the fields
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5addinfo\Domain\Model\Field> $fields
     * @return void
     */
    public function setFields(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $fields)
    {
        $this->fields = $fields;
    }
    
    /**
     * 
     * @return string
     */
    function getLabelText() {
        return $this->labelText;
    }

    /**
     * 
     * @param string $labelText
     */
    function setLabelText($labelText) {
        $this->labelText = $labelText;
    }

    
}
