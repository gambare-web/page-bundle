<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PageMeta
{

    /**
     * This comma separated list will contain the keywords for the page's meta information.
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $metaKeywords = null;

    /**
     * If this string is set, it will be inserted as a meta tag for the page description.
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $metaDescription = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $metaTitle = null;

    /**
     * @return string|null
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @param string|null $metaKeywords
     */
    public function setMetaKeywords(?string $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
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
     */
    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
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
     */
    public function setMetaTitle(?string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
}