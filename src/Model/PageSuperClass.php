<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MappedSuperclass
 */
class PageSuperClass
{
    /**
     * @Gedmo\Slug(fields={"id"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected ?string $slug = null;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $title = null;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected ?bool $enabled = false;

    /**
     * This name could be used for private reference in the admin panel for example.
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected ?string $name = null;

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @param bool|null $enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}