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
 * Additinal Attributes
 */
class AddAttribute extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Parent Object
     *
     * @var string
     */
    protected $parentObject = '';

    /**
     * Reference
     *
     * @var string
     * @validate NotEmpty
     */
    protected $reference = '';

    /**
     * Value
     *
     * @var string
     * @validate NotEmpty
     */
    protected $value = '';

    /**
     * Permissions
     *
     * @var int
     * @validate NotEmpty
     */
    protected $permissions = 0;

    /**
     * Owner
     *
     * @var \CGB\Relax5core\Domain\Model\Owner
     * @lazy
     */
    protected $owner = null;

    /**
     * Usergroup
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup
     * @lazy
     */
    protected $usergroup = null;

    /**
     * Returns the value
     *
     * @return string $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the reference
     *
     * @return string reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets the reference
     *
     * @param string $reference
     * @return void
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Returns the parentObject
     *
     * @return string $parentObject
     */
    public function getParentObject()
    {
        return $this->parentObject;
    }

    /**
     * Sets the parentObject
     *
     * @param string $parentObject
     * @return void
     */
    public function setParentObject($parentObject)
    {
        $this->parentObject = $parentObject;
    }

    /**
     * Returns the permissions
     *
     * @return int $permissions
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets the permissions
     *
     * @param int $permissions
     * @return void
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * Returns the owner
     *
     * @return \CGB\Relax5core\Domain\Model\Owner $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets the owner
     *
     * @param \CGB\Relax5core\Domain\Model\Owner|null $owner
     * @return void
     */
    public function setOwner(\CGB\Relax5core\Domain\Model\Owner $owner = null)
    {
        $this->owner = $owner;
    }

    /**
     * Returns the usergroup
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $usergroup
     */
    public function getUsergroup()
    {
        return $this->usergroup;
    }

    /**
     * Sets the usergroup
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $usergroup
     * @return void
     */
    public function setUsergroup(\TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup $usergroup)
    {
        $this->usergroup = $usergroup;
    }

}
