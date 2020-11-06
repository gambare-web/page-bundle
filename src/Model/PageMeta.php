<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PageMeta
{

    /**
     * This comma separated list will contain the keywords for the page's meta information.
     *
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


    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(string $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
}