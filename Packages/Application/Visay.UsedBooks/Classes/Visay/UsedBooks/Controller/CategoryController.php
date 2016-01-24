<?php
namespace Visay\UsedBooks\Controller;

/*
 * This file is part of the Visay.UsedBooks package.
 */

use TYPO3\Flow\Annotations as Flow;
use Visay\UsedBooks\Domain\Model\Category;

class CategoryController extends AbstractActionController
{

    /**
     * @return void
     */
    public function indexAction()
    {
        $this->view->assign('categories', $this->categoryRepository->findAll());
    }

    /**
     * @param Category $category
     * @return void
     */
    public function showAction(Category $category)
    {
        $this->view->assign('category', $category);
    }

    /**
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * @param Category $newCategory
     * @return void
     */
    public function createAction(Category $newCategory)
    {
        $this->categoryRepository->add($newCategory);
        $this->addFlashMessage('Created a new category.');
        $this->redirect('index');
    }

    /**
     * @param Category $category
     * @return void
     */
    public function editAction(Category $category)
    {
        $this->view->assign('category', $category);
    }

    /**
     * @param Category $category
     * @return void
     */
    public function updateAction(Category $category)
    {
        $this->categoryRepository->update($category);
        $this->addFlashMessage('Updated the category.');
        $this->redirect('index');
    }

    /**
     * @param Category $category
     * @return void
     */
    public function deleteAction(Category $category)
    {
        $this->categoryRepository->remove($category);
        $this->persistenceManager->whitelistObject($category);
        $this->persistenceManager->persistAll(TRUE);
        $this->addFlashMessage('Deleted a category.');
        $this->redirect('index');
    }

}
