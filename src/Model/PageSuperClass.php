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
     * @ORM\Column(type="text", nullable=false)
     */
    protected $title;

    /**
     * @Gedmo\Slug(fields={"title"}, unique=true)
     * @ORM\Column(type="string", length=255)
     */
    protected $slug;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $enabled = false;

    /**
     * This name could be used for private reference in the admin panel for example.
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}