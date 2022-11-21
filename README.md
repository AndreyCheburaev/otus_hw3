# Генератор hash пароля

### Требования
* PHP 7.0.0

### Установка
```shell
composer require andrey-cheburaev/package-otus-hw3
```

### Использование
```php
<?php
$hashProcessor = new \AndreyCheburaev\PackageOtusHw3\HashProcessor();
echo $hashProcessor->getBlowfishHash('my_password'); // "$2y$10$GqWn5VgoqzuKRPfSQT8rnub85xWtoc8mJrZHI/DqP5RfV66Hbe3V2"
```