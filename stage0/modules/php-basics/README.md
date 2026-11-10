# [Stage#0.](../../README.md) Введение в PHP

## В данном модуле студентам необходимо:

1. Установить PHP 8.3+ и запустить первый скрипт.
2. Освоить три способа запуска: CLI, интерактивный режим, встроенный сервер.
3. Познакомиться с синтаксисом: теги, вывод, комментарии, переменные.
4. Узнать базовые типы данных и операции с ними.
5. Научиться разбивать страницу на части через `include` и `require`.

## Приблизительное время прохождения модуля

Теория: 4 часа
Практика: 4 часа

## Теория

1. [php.net: Основы синтаксиса](https://www.php.net/manual/ru/language.basic-syntax.php) (0.5 часа)
2. [php.net: Переменные](https://www.php.net/manual/ru/language.variables.basics.php) (0.5 часа)
3. [php.net: Типы](https://www.php.net/manual/ru/language.types.intro.php) — `bool`, `int`, `float`, `string`, `null` (1 час)
4. [php.net: include](https://www.php.net/manual/ru/function.include.php) и [require](https://www.php.net/manual/ru/function.require.php) (0.5 часа)
5. [Хекслет: Основы PHP](https://ru.hexlet.io/programs/php-basics-free) или [Code Basics: PHP](https://code-basics.com/ru/languages/php) — модули «Введение», «Арифметика», «Строки», «Переменные» (1.5 часа)

### Установка

- **Windows:** [Laragon](https://laragon.org/) (PHP, MySQL и Composer сразу) или архив с [windows.php.net](https://windows.php.net/download/) + добавить папку в `PATH`
- **macOS:** `brew install php`
- **Linux:** `sudo apt install php-cli`

Проверка:

```bash
php -v     # версия
php -m     # установленные расширения
php --ini  # где лежит php.ini
```

### Три способа запуска

```bash
php hello.php              # выполнить скрипт в терминале
php -a                     # интерактивный режим: вводить код построчно
php -S localhost:8000      # встроенный веб-сервер в текущей папке
```

После `php -S localhost:8000` страница `index.php` открывается по адресу `http://localhost:8000`.

### Синтаксис

```php
<?php

// однострочный комментарий
/* многострочный
   комментарий */

$name = 'Иван';
$age = 25;
$price = 199.90;
$isStudent = true;

echo 'Привет, ' . $name . "\n";   // конкатенация через точку
echo "Мне {$age} лет\n";           // интерполяция в двойных кавычках
echo 'Мне {$age} лет' . "\n";      // в одинарных — выведется как есть

var_dump($price);                   // float(199.9)
var_dump($age + 5);                 // int(30)
var_dump(10 / 4);                   // float(2.5)
var_dump(intdiv(10, 4));            // int(2)
var_dump(10 % 4);                   // int(2)
```

### PHP внутри HTML

```php
<?php $title = 'Меню'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <p>Сегодня <?= date('d.m.Y') ?></p>
</body>
</html>
```

`<?= $x ?>` — короткая запись `<?php echo $x; ?>`.

### include и require

```php
<?php require __DIR__ . '/header.php'; ?>
<main>Содержимое страницы</main>
<?php require __DIR__ . '/footer.php'; ?>
```

- `require` — если файла нет, скрипт останавливается с ошибкой.
- `include` — если файла нет, будет предупреждение, скрипт продолжится.
- `require_once` — подключает файл только один раз.

## Практика

1. Установить PHP и проверить `php -v`.
2. Написать `hello.php`, который спрашивает имя через `readline('Как вас зовут? ')` и выводит приветствие с текущей датой.
3. Запустить встроенный сервер и открыть страницу с текущей датой.
4. Выполнить задание [Coffee Shop#1. Шаблоны на PHP](../../tasks/coffee-shop/coffee-shop-1.md).
5. Пройти тест [St0] Введение в PHP: ответить на вопросы ниже.

## Вопросы для самопроверки

1. Как узнать версию PHP?
2. Чем запуск в CLI отличается от запуска через встроенный сервер?
3. Чем одинарные кавычки отличаются от двойных?
4. Как соединить две строки?
5. Что выведет `var_dump(7 / 2)`? А `var_dump(intdiv(7, 2))`?
6. Что выведет `var_dump("5" + "5")`? А `var_dump("5" . "5")`?
7. Чем `require` отличается от `include`?
8. Что такое `<?=`?

## Дополнительные материалы

1. [Learn PHP The Right Way (YouTube, EN)](https://www.youtube.com/playlist?list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-) — первые 8 видео
2. [PHP Tutorial (w3schools, EN)](https://www.w3schools.com/php/)
