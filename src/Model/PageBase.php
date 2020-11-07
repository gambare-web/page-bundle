<?php


namespace Gambare\PageBundle\Model;

use Gedmo\Timestampable\Traits\TimestampableEntity;

class PageBase extends PageSuperClass
{
    use PageMeta;
    use PageBasicAnalytics;
    use TimestampableEntity;
}