## 1. Update Composer dependencies

Add to composer.json

```
"require": {
    "fsi/admin-news-bundle": "1.1.*@dev"
}
```

## 2. Register bundles

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        /* FSiNewsBundle */
        new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
        new Ivory\CKEditorBundle\IvoryCKEditorBundle(),

        new FSi\Bundle\NewsBundle\FSiNewsBundle(),
        new FSi\Bundle\AdminNewsBundle\FSiAdminNewsBundle(),
    );
}
```

## 3. Install FSiNewsBundle

[FSiNewsBundle - Installation](https://github.com/fsi-open/news-bundle/blob/master/Resources/doc/installation.md)

## 4. Add the news element to admin_menu.yml

Since the bundle now uses FSiAdminBundle 1.1, you need to add it to the menu configuration
file (```app\config\admin_menu.yml```):

```
    menu:
        - { id: news, name: admin.news.menu }
```

Where ```id``` is the id of the admin element, and ```name``` is the translation key.
