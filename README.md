Page Bundle
==========

Basic Page bundle for Symfony 5.
This Bundle is intended for personal use. But you are free to use it if you really want to ...


Installation
============

Open a command console, enter your project directory and execute:

```console
$ composer require gambare/page-bundle
```

Usage
============

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

Details
============

Create a Page entity that extend PageBase class.
The only required field is an ID. 
From here add whatever suit your application.

If you don't want all the stuff in the PageBase class you can extend direcly PaseSuperClass or use the differents Trait.