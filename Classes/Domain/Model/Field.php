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
 * Field
 */
class Field extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Label
     *
     * @var string
     */
    protected $labelText = '';

    /**
     * Type
     *
     * @var string
     */
    protected $type = '';

    /**
     * Value List
     *
     * @var string
     */
    protected $valueList = '';

    /**
     * Additional Text
     *
     * @var bool
     */
    protected $addText = false;

    /**
     * Evaluate to
     *
     * @var int
     */
    protected $eval = 0;

    /**
     * Store Key Only
     *
     * @var bool
     */
    protected $storeKeyOnly = false;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the labelText
     *
     * @return string $labelText
     */
    public function getLabelText()
    {
        return $this->labelText;
    }

    /**
     * Sets the labelText
     *
     * @param string $labelText
     * @return void
     */
    public function setLabelText($labelText)
    {
        $this->labelText = $labelText;
    }

    /**
     * Returns the type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the valueList
     *
     * @return string $valueList
     */
    public function getValueList()
    {
        return $this->valueList;
    }

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
                'value' => $this->storeKeyOnly ? ($key + 1) : $option, 
                'label' => $option,
            ];
        }
        if ($this->isAddText()) {
            $list[] = ['label' => \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('tx_relax5addinfo_model_definition.add_text', 'relax5addinfo'), 'value' => '+'];
        }
        return $list;
    }
    
    /**
     * Sets the valueList
     *
     * @param string $valueList
     * @return void
     */
    public function setValueList($valueList)
    {
        $this->valueList = $valueList;
    }

    /**
     * Returns the addText
     *
     * @return bool $addText
     */
    public function getAddText()
    {
        return $this->addText;
    }

    /**
     * Sets the addText
     *
     * @param bool $addText
     * @return void
     */
    public function setAddText($addText)
    {
        $this->addText = $addText;
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
     * Returns the eval
     *
     * @return int $eval
     */
    public function getEval()
    {
        return $this->eval;
    }

    /**
     * Sets the eval
     *
     * @param int $eval
     * @return void
     */
    public function setEval($eval)
    {
        $this->eval = $eval;
    }

    /**
     * Returns the storeKeyOnly
     *
     * @return bool $storeKeyOnly
     */
    public function getStoreKeyOnly()
    {
        return $this->storeKeyOnly;
    }

    /**
     * Sets the storeKeyOnly
     *
     * @param bool $storeKeyOnly
     * @return void
     */
    public function setStoreKeyOnly($storeKeyOnly)
    {
        $this->storeKeyOnly = $storeKeyOnly;
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
}
