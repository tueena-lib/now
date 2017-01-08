tueena-lib/now
=================
A php 7 class that returns the current time as well as an interface, that can be mocked for unit tests.

Features
--------
* Invoking an instance of the class returns an instance of `\DateTimeImmutable`.

Usage
-----
```php
<?php

use tueenaLib\now;

$now = new Now;
$immutableDateTimeObject = $now();
```

License
-------
MIT

Requirements
------------
php >= 7.0.0

Installation
------------
If you use `Composer`:
```
composer require tueena-lib/now
```
Otherwise just download the class and the interface and use it.

Contact
-------
Bastian Fenske <bastian.fenske@tueena.org>
