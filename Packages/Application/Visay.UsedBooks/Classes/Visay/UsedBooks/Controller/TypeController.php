<?php
namespace Visay\UsedBooks\Controller;

/*
 * This file is part of the Visay.UsedBooks package.
 */

use TYPO3\Flow\Annotations as Flow;
use Visay\UsedBooks\Domain\Model\Type;

class TypeController extends AbstractActionController
{

    /**
     * @return void
     */
    public function indexAction()
    {
        $this->view->assign('types', $this->typeRepository->findAll());
    }

    /**
     * @param Type $type
     * @return void
     */
    public function showAction(Type $type)
    {
        $this->view->assign('type', $type);
    }

    /**
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * @param Type $newType
     * @return void
     */
    public function createAction(Type $newType)
    {
        $this->typeRepository->add($newType);
        $this->addFlashMessage('Created a new type.');
        $this->redirect('index');
    }

    /**
     * @param Type $type
     * @return void
     */
    public function editAction(Type $type)
    {
        $this->view->assign('type', $type);
    }

    /**
     * @param Type $type
     * @return void
     */
    public function updateAction(Type $type)
    {
        $this->typeRepository->update($type);
        $this->addFlashMessage('Updated the type.');
        $this->redirect('index');
    }

    /**
     * @param Type $type
     * @return void
     */
    public function deleteAction(Type $type)
    {
        $this->typeRepository->remove($type);
        $this->persistenceManager->whitelistObject($type);
        $this->persistenceManager->persistAll(TRUE);
        $this->addFlashMessage('Deleted a type.');
        $this->redirect('index');
    }

}
