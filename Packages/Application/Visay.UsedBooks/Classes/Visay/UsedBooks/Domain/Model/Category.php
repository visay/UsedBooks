<?php
namespace Visay\UsedBooks\Domain\Model;

/*
 * This file is part of the Visay.UsedBooks package.
 */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Category
{

    /**
     * @var string
     * @Flow\Validate(type="NotEmpty")
     */
    protected $title;


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}
