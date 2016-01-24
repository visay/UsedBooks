<?php
namespace Visay\UsedBooks\Controller;

/*
 * This file is part of the Visay.UsedBooks package.
 */

use TYPO3\Flow\Annotations as Flow;
use Visay\UsedBooks\Domain\Model\Book;

class BookController extends AbstractActionController
{

    /**
     * @return void
     */
    public function indexAction()
    {
        $this->view->assign('books', $this->bookRepository->findAll());
    }

    /**
     * @param Book $book
     * @return void
     */
    public function showAction(Book $book)
    {
        $this->view->assign('book', $book);
    }

    /**
     * @return void
     */
    public function newAction()
    {
        $this->view->assign('categories', $this->categoryRepository->findAll());
        $this->view->assign('types', $this->typeRepository->findAll());
    }

    /**
     * @param Book $newBook
     * @return void
     */
    public function createAction(Book $newBook)
    {
        $this->bookRepository->add($newBook);
        $this->addFlashMessage('Created a new book.');
        $this->redirect('index');
    }

    /**
     * @param Book $book
     * @return void
     */
    public function editAction(Book $book)
    {
        $this->view->assign('book', $book);
        $this->view->assign('categories', $this->categoryRepository->findAll());
        $this->view->assign('types', $this->typeRepository->findAll());
    }

    /**
     * @param Book $book
     * @return void
     */
    public function updateAction(Book $book)
    {
        $this->bookRepository->update($book);
        $this->addFlashMessage('Updated the book.');
        $this->redirect('index');
    }

    /**
     * @param Book $book
     * @return void
     */
    public function deleteAction(Book $book)
    {
        $this->bookRepository->remove($book);
        $this->persistenceManager->whitelistObject($book);
        $this->persistenceManager->persistAll(TRUE);
        $this->addFlashMessage('Deleted a book.');
        $this->redirect('index');
    }

}
