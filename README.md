Чистый проект с подключенными тестами codeception и генерацией документации phpdocumentator

запустить локальный сервер php
php -S localhost:8000 -t web
сайт будет доступен по адресу http://localhost:8000
---------------------------------------------------
документация phpDoc
для генерации документации используем команду из корня проекта
php vendor/bin/phpdoc -d ./src -t ./docs
---------------------------------------------------
Тестирование
composer require "codeception/codeception" --dev
php vendor/bin/codecept bootstrap
php vendor/bin/codecept generate:cest acceptance First
---------------------------------------------------