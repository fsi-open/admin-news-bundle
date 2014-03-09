# Installation in 3 simple steps

## 1. Download News Bundle and Admin News Bundle

Add to composer.json

```
"require": {
    "fsi/news-bundle": "1.0.*@dev",
    "fsi/admin-news-bundle": "1.0.*@dev"
    "doctrine/doctrine-bundle": "dev-master",
    "doctrine/doctrine-cache-bundle": "dev-master"
}
```

## 2. Register bundles

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        /* FSiAdminBundle */
        new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        new FSi\Bundle\DataSourceBundle\DataSourceBundle(),
        new FSi\Bundle\DataGridBundle\DataGridBundle(),
        new FSi\Bundle\AdminBundle\FSiAdminBundle(),

        /* FSiNewsBundle */
        new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
        new FSi\Bundle\NewsBundle\FSiNewsBundle(),

        new FSi\Bundle\FormExtensionsBundle\FSiFormExtensionsBundle(),
        new FSi\Bundle\AdminNewsBundle\FSiAdminNewsBundle(),
    );
}
```

## 3. Install FSiNewsBundle

[FSiNewsBundle - Installation](https://github.com/fsi-open/news-bundle/blob/master/Resources/doc/installation.md)