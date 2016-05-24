<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keyword
 *
 * @ORM\Table(name="keyword", indexes={@ORM\Index(name="pageId", columns={"pageId"})})
 * @ORM\Entity
 */
class Keyword
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
     * @ORM\Column(name="keyword", type="string", length=30, nullable=false)
     */
    private $keyword;

    /**
     * @var array
     *
     * @ORM\Column(name="keyz", type="json_array", nullable=false)
     */
    private $keyz;

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
     * Set keyword
     *
     * @param string $keyword
     *
     * @return Keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    
        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set keyz
     *
     * @param array $keyz
     *
     * @return Keyword
     */
    public function setKeyz($keyz)
    {
        $this->keyz = $keyz;
    
        return $this;
    }

    /**
     * Get keyz
     *
     * @return array
     */
    public function getKeyz()
    {
        return $this->keyz;
    }

    /**
     * Set pageId
     *
     * @param \AppBundle\Entity\Page $pageId
     *
     * @return Keyword
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

        return $this->getKeyword();
    }
}
