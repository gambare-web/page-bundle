Page Bundle
==========

- Page bundle for Symfony 5 :
    - Seo Traits
    - Basic Analytics Traits
    - Timestampable (doctrine extensions)
- [EasyAdminBundle v3](https://symfony.com/doc/current/bundles/EasyAdminBundle/index.html) integration.

*Note : This Bundle is intended for personal use. But you are free to use it if you really want to*


Installation
============

Open a command console, enter your project directory and execute:

```console
composer require gambare-web/page-bundle:dev-main
```

Usage
============

Create a Page entity that extend PageBase class.

The only required field is an id. 

```
<?php

namespace App\Entity;

use App\Repository\PageRepository;
use Doctrine\ORM\Mapping as ORM;
use Gambare\PageBundle\Model\PageBase;

/**
 * @ORM\Entity(repositoryClass=PageRepository::class)
 */
class Page extends PageBase
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
```
EasyAdminBundle v3 integration
============

Create a PageCrudController class that extends PageBaseCrudController

PageBaseCrudController is extending the AbstractCrudController from EasyAdmin

```
namespace App\Controller\Admin;

use App\Entity\Page;
use Gambare\PageBundle\Controller\Admin\PageBaseCrudController;

class PageCrudController extends PageBaseCrudController
{
    public static function getEntityFqcn(): string
    {
        return Page::class;
    }
}
```

Add the PageCrudController to your EasyAdmin DashboardController

```
namespace App\Controller\Admin;

use App\Entity\Page;

class DashboardController extends AbstractDashboardController
{

   [...]

    public function configureMenuItems(): iterable
    {
        [...]
        yield MenuItem::linkToCrud('Page', 'far fa-file', Page::class);
    }
}
```

Details
============

- Add whatever fields you need in your Page Entity.
- Generate migration


If you don't want all the stuff in the PageBase class you can extend direcly PaseSuperClass or use the differents Trait.
