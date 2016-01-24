<?php
namespace Visay\UsedBooks\Domain\Model;

/*
 * This file is part of the Visay.UsedBooks package.
 */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
use TYPO3\Media\Domain\Model\Image;
use Visay\UsedBooks\Domain\Model\Category;
use Visay\UsedBooks\Domain\Model\Type;

/**
 * @Flow\Entity
 */
class Book
{

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var Category
     * @ORM\ManyToOne
     */
    protected $category;

    /**
     * @var \DateTime
     */
    protected $postDate;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var Type
     * @ORM\ManyToOne
     */
    protected $type;

    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    protected $description;


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

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return void
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * @param \DateTime $postDate
     * @return void
     */
    public function setPostDate(\DateTime $postDate)
    {
        $this->postDate = $postDate;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param integer $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Type $type
     * @return void
     */
    public function setType(Type $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}
