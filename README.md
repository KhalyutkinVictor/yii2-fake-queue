fake queue
==========
use queues without message brokers

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist khalyutkin/yii2-fake-queue "*"
```

or add

```
"khalyutkin/yii2-fake-queue": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \khalyutkin\fakeQueue\AutoloadExample::widget(); ?>```