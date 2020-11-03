<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PageMeta
{

    /**
     * This comma separated list will contain the keywords for the page's meta information.
     *
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $metaKeywords;

    /**
     * If this string is set, it will be inserted as a meta tag for the page description.
     *
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $metaDescription;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $metaTitle;

    /**
     * @return string
     */
    public function getMetaKeywords(): string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords(string $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return string
     */
    public function getMetaDescription(): string
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription(string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return string
     */
    public function getMetaTitle(): string
    {
        return $this->metaTitle;
    }

    /**
     * @param string $metaTitle
     */
    public function setMetaTitle(string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
}