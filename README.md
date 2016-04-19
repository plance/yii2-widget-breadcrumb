Yii2 widget display Breadcrumbs
==============

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist plance/yii2-widget-breadcrumb "*"
```

or add

```
"plance/yii2-widget-breadcrumb": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Set breadcrumb:
```php
/**
 * $text - breadcrumb text
 * $is_active - bool (active on inactive)
 */
Breadcrumb::set($text, $is_active);
```

Show breadcrumbs:
```php
<?php echo Breadcrumb::widget(); ?>
```