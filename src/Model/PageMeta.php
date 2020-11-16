<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PageMeta
{
    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    protected $metaTitle = null;

    /**
     * @var string|null
     * If this string is set, it will be inserted as a meta tag for the page description.
     * @ORM\Column(type="text", nullable=true)
     */
    protected $metaDescription = null;

    /**
     * @var string|null
     * This comma separated list will contain the keywords for the page's meta information.
     * @ORM\Column(type="text", nullable=true)
     */
    protected $metaKeywords = null;

    /**
     * @var string|null
     * This comma separated list will contain the keywords for the page's meta information.
     * @ORM\Column(type="text", nullable=true)
     */
    protected $author = null;

    /**
     * @var string|null
     * https://moz.com/learn/seo/robots-meta-directives
     * <meta name="robots" content="{{ page.robot | raw }}">
     * @ORM\Column(type="text", nullable=true)
     */
    protected $robot = null;

    /**
     * @return string|null
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string|null $metaKeywords
     *
     * @return PageMeta
     */
    public function setMetaKeywords(?string $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @param string|null $metaDescription
     *
     * @return PageMeta
     */
    public function setMetaDescription(?string $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    /**
     * @param string|null $metaTitle
     *
     * @return PageMeta
     */
    public function setMetaTitle(?string $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string|null $author
     *
     * @return PageMeta
     */
    public function setAuthor(?string $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRobot(): ?string
    {
        return $this->robot;
    }

    /**
     * @param string|null $robot
     *
     * @return PageMeta
     */
    public function setRobot(?string $robot)
    {
        $this->robot = $robot;

        return $this;
    }
}