<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagetitle
 *
 * @ORM\Table(name="page_title", indexes={@ORM\Index(name="pageId", columns={"pageId"})})
 * @ORM\Entity
 */
class PageTitle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255, nullable=false)
     */
    private $style;

    /**
     * @var int
     *
     * @ORM\Column(name="order_title", type="integer", nullable=false)
     */
    private $orderTitle;

    /**
     * @var \Page
     *
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pageId", referencedColumnName="id")
     * })
     */
    private $pageId;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Pagetitle
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set style
     *
     * @param string $style
     *
     * @return Pagetitle
     */
    public function setStyle($style)
    {
        $this->style = $style;
    
        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set orderTitle
     *
     * @param int $orderTitle
     *
     * @return Pagetitle
     */
    public function setOrderTitle($orderTitle)
    {
        $this->orderTitle = $orderTitle;
    
        return $this;
    }

    /**
     * Get orderTitle
     *
     * @return int
     */
    public function getOrderTitle()
    {
        return $this->orderTitle;
    }

    /**
     * Set pageid
     *
     * @param \AppBundle\Entity\Page $pageId
     *
     * @return Pagetitle
     */
    public function setPageId(\AppBundle\Entity\Page $pageId = null)
    {
        $this->pageId = $pageId;
    
        return $this;
    }

    /**
     * Get pageId
     *
     * @return \AppBundle\Entity\Page
     */
    public function getPageId()
    {
        return $this->pageId;
    }
    
               public function __toString() {

        return $this->getTitle();
    }
}
