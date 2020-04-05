# Проект на чистом php 

#### Подключены:
1. тесты codeception 
2. генерация документации phpdocumentator

#### документация phpDoc
для генерации документации используем команду из корня проекта

`php vendor/bin/phpdoc -d ./src -t ./docs`

для Open Server 

`vendor\bin\phpdoc.bat -d .\src -t .\docs`

#### Тестирование
composer require "codeception/codeception" --dev

`php vendor/bin/codecept bootstrap`

`php vendor/bin/codecept generate:cest acceptance First`

_запустить локальный сервер php
php -S localhost:8000 -t web
сайт будет доступен по адресу http://localhost:8000_
