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

Configuration
============


#### Activate doctrine extention

This bundle use sluggable and timestampable

```yaml
stof_doctrine_extensions:
    orm:
        default:
            timestampable: true
            sluggable: true
```

*-TODO- automatize with a recipe*

#### Twig namespace

Add Twig namespace in config/packages/twig.yaml if you want to use the predefined twig template 

```yaml
twig:
    paths:
        '%kernel.project_dir%/vendor/gambare-web/page-bundle/templates': gambare-web
```

#### Create Page entity

Create a Page entity that extend PageBase class. The only required field is an id. 

```php
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

#### Generate Migration

Tweak the Page entity adding any field you need then generate doctrine migration

```console
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

Twig integration
============

3 twig template are provided for the PageMeta trait

```twig
    {% include '@gambare-web/_meta.html.twig' %}
    {% include '@gambare-web/_header_script.html.twig' %}
    {% include '@gambare-web/_footer_script.html.twig' %}
```

Here an example

```twig
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{% block title %}{% if page is defined %}{{ page.title }}{% else %}My Title{% endif %}{% endblock %}</title>
    <base href="{{ path('home') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}"/>

    {% include '@gambare-web/_meta.html.twig' %}
    {% include '@gambare-web/_header_script.html.twig' %}

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>

{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
    {% include '@gambare-web/_footer_script.html.twig' %}
{% endblock %}
```


EasyAdminBundle v3 integration
============

Create a PageCrudController class that extends PageBaseCrudController

PageBaseCrudController is extending the AbstractCrudController from EasyAdmin

```php
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

```php
namespace App\Controller\Admin;

use App\Entity\Page;

class DashboardController extends AbstractDashboardController
{
   //[...]
    public function configureMenuItems(): iterable
    {
        //[...]
        yield MenuItem::linkToCrud('Page', 'far fa-file', Page::class);
    }
}
```
