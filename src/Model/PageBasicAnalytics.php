<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PageBasicAnalytics
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $nbViews = 0;

    /**
     * Header tag
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $analytics = null;

    /**
     * @return int|null
     */
    public function getNbViews(): ?int
    {
        return $this->nbViews;
    }

    /**
     * @param int|null $nbViews
     */
    public function setNbViews(?int $nbViews): void
    {
        $this->nbViews = $nbViews;
    }

    /**
     * @return string|null
     */
    public function getAnalytics(): ?string
    {
        return $this->analytics;
    }

    /**
     * @param string|null $analytics
     */
    public function setAnalytics(?string $analytics): void
    {
        $this->analytics = $analytics;
    }

    public function view()
    {
        $this->nbViews++;

        return $this;
    }
}