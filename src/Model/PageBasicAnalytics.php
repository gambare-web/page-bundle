<?php


namespace Gambare\PageBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PageBasicAnalytics
{
    /**
     * @var string|null
     * script tag include in the header
     * @ORM\Column(type="text", nullable=true)
     */
    protected $analytics = null;

    /**
     * @var string|null
     * script tag include in the footer
     * @ORM\Column(type="text", nullable=true)
     */
    protected $analyticsFooter = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $nbViews = 0;

    /**
     * @return int|null
     */
    public function getNbViews(): ?int
    {
        return $this->nbViews;
    }

    /**
     * @param int|null $nbViews
     *
     * @return PageBasicAnalytics
     */
    public function setNbViews(?int $nbViews)
    {
        $this->nbViews = $nbViews;

        return $this;
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
     *
     * @return PageBasicAnalytics
     */
    public function setAnalytics(?string $analytics)
    {
        $this->analytics = $analytics;

        return $this;
    }

    public function view()
    {
        $this->nbViews++;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalyticsFooter(): ?string
    {
        return $this->analyticsFooter;
    }

    /**
     * @param string|null $analyticsFooter
     *
     * @return PageBasicAnalytics
     */
    public function setAnalyticsFooter(?string $analyticsFooter)
    {
        $this->analyticsFooter = $analyticsFooter;

        return $this;
    }
}