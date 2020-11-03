<?php


namespace Gambare\PageBundle\Model;

use Gedmo\Timestampable\Traits\Timestampable;

class PageBase extends PageSuperClass
{
    use Timestampable;
    use PageMeta;
    use PageBasicAnalytics;
}