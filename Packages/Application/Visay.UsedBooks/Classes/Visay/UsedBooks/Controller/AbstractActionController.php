<?php
namespace Visay\UsedBooks\Controller;

/*
 * This file is part of the Visay.UsedBooks package.
 */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use Visay\UsedBooks\Domain\Repository\BookRepository;
use Visay\UsedBooks\Domain\Repository\CategoryRepository;
use Visay\UsedBooks\Domain\Repository\TypeRepository;

abstract class AbstractActionController extends ActionController {

    /**
     * @var CategoryRepository
     * @Flow\Inject
     */
    protected $categoryRepository;

    /**
     * @var TypeRepository
     * @Flow\Inject
     */
    protected $typeRepository;

    /**
     * @Flow\Inject
     * @var BookRepository
     */
    protected $bookRepository;
}
