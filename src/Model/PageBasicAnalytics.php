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

    /**
     * @return int
     */
    public function getNbViews(): int
    {
        return $this->nbViews;
    }

    /**
     * @param int $nbViews
     */
    public function setNbViews(int $nbViews): void
    {
        $this->nbViews = $nbViews;
    }

    /**
     * @return string
     */
    public function getAnalytics(): string
    {
        return $this->analytics;
    }

    /**
     * @param string $analytics
     */
    public function setAnalytics(string $analytics): void
    {
        $this->analytics = $analytics;
    }

    public function view()
    {
        $this->nbViews++;
    }
}