<?php
namespace CGB\Relax5addinfo\Controller;

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
 * AddAttributeController
 */
class AddAttributeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * addAttributeRepository
     *
     * @var \CGB\Relax5addinfo\Domain\Repository\AddAttributeRepository
     * @inject
     */
    protected $addAttributeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $addAttributes = $this->addAttributeRepository->findAll();
        $this->view->assign('addAttributes', $addAttributes);
    }

    /**
     * action edit
     *
     * @param \CGB\Relax5addinfo\Domain\Model\AddAttribute $addAttribute
     * @param \CGB\Relax5addinfo\Domain\Model\Field $field
     * @ignorevalidation $addAttribute
     * @return void
     */
    public function editAction(\CGB\Relax5addinfo\Domain\Model\AddAttribute $addAttribute, \CGB\Relax5addinfo\Domain\Model\Field $field)
    {
        $this->view->assignMultiple([
            'addAttribute' => $addAttribute,
            'field' => $field,
        ]);
    }

    /**
     * action update
     *
     * @param \CGB\Relax5addinfo\Domain\Model\AddAttribute $addAttribute
     * @return void
     */
    public function updateAction(\CGB\Relax5addinfo\Domain\Model\AddAttribute $addAttribute)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->addAttributeRepository->update($addAttribute);
        return json_encode(['success' => 'ok']);
    }
}
