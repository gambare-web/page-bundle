<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PageBasicAnalytics
{
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nbViews = 0;

    /**
     * Header tag
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $analytics;

    public function getNbViews(): int
    {
        return $this->nbViews;
    }

    public function setNbViews(int $nbViews): void
    {
        $this->nbViews = $nbViews;
    }

    public function getAnalytics(): ?string
    {
        return $this->analytics;
    }

    public function setAnalytics(string $analytics): void
    {
        $this->analytics = $analytics;
    }

    public function view()
    {
        $this->nbViews++;
    }
}