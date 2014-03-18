# Validation

By default FSiNewsBundle nor FSiAdminNewsBundle does not contain any validation configuration
for ``News`` model.
Following example will show you how to create such validation.

First you need to create your own implementation of News model.
```php
<?php
// src/FSi/Bundle/FixturesBundle/Entity/News.php

namespace FSi\FixturesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FSi\Bundle\NewsBundle\Model\News as BaseNews;

/**
 * @ORM\Entity
 * @ORM\Table(name="fsi_news")
 */
class News extends BaseNews
{
}
```

You can overwrite each field and add validation in annotations but there is a easier way.
Simply create ``/config/validation.yml`` file.

```yml
# src/FSi/Bundle/FixturesBundle/Resources/config/validation.yml

FSi\FixturesBundle\Entity\News:
  properties:
    title:
      - NotBlank: ~
    date:
      - DateTime: ~
    introduction:
      - NotBlank: ~
    content:
      - NotBlank: ~
```

This should be enough to validate model in your create/edit forms in admin panel.