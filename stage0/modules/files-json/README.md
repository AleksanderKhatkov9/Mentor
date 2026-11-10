# [Stage#0.](../../README.md) Файлы и JSON

## В данном модуле студентам необходимо:

1. Научиться читать и записывать файлы.
2. Освоить формат JSON и функции `json_encode` и `json_decode`.
3. Хранить данные приложения в JSON-файле.
4. Работать с датой и временем.

## Приблизительное время прохождения модуля

Теория: 2 часа
Практика: 3 часа

## Теория

1. [php.net: file_get_contents](https://www.php.net/manual/ru/function.file-get-contents.php) и [file_put_contents](https://www.php.net/manual/ru/function.file-put-contents.php) (0.5 часа)
2. [php.net: json_encode](https://www.php.net/manual/ru/function.json-encode.php) и [json_decode](https://www.php.net/manual/ru/function.json-decode.php) (0.5 часа)
3. [php.net: DateTimeImmutable](https://www.php.net/manual/ru/class.datetimeimmutable.php) и [форматы date](https://www.php.net/manual/ru/datetime.format.php) (0.5 часа)

### JSON

JSON — текстовый формат обмена данными. Ассоциативный массив PHP превращается в JSON-объект, индексный — в JSON-массив.

```json
[
    {"id": 1, "name": "Иван", "total": 440, "createdAt": "2026-12-15 14:30"},
    {"id": 2, "name": "Анна", "total": 310, "createdAt": "2026-12-15 15:05"}
]
```

### Хранилище в JSON-файле

```php
<?php

declare(strict_types=1);

const ORDERS_FILE = __DIR__ . '/data/orders.json';

function loadOrders(): array
{
    if (!file_exists(ORDERS_FILE)) {
        return [];
    }

    return json_decode(file_get_contents(ORDERS_FILE), true, flags: JSON_THROW_ON_ERROR);
}

function saveOrders(array $orders): void
{
    $json = json_encode($orders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    file_put_contents(ORDERS_FILE, $json, LOCK_EX);
}

$orders = loadOrders();
$orders[] = [
    'id' => count($orders) + 1,
    'name' => 'Иван',
    'total' => 440,
    'createdAt' => date('Y-m-d H:i'),
];
saveOrders($orders);
```

- `json_decode(..., true)` — вернуть массив, а не объект.
- `JSON_UNESCAPED_UNICODE` — кириллица сохраняется читаемой, а не как `\u0418`.
- `LOCK_EX` — два запроса не запишут файл одновременно.

### Дата и время

```php
echo date('d.m.Y H:i');                       // 15.12.2026 14:30

$date = new DateTimeImmutable('2026-12-15');
echo $date->modify('+7 days')->format('d.m.Y'); // 22.12.2026
echo $date->format('Y-m');                      // 2026-12 — удобно для фильтра по месяцу
```

## Практика

1. Сохранить в JSON-файл список из 5 товаров и вывести его на странице.
2. Добавить в форму обратной связи из модуля «Формы» сохранение сообщений в `messages.json`.
3. Вывести сообщения на отдельной странице, новые сверху.

## Вопросы для самопроверки

1. Что вернёт `json_decode` без второго аргумента?
2. Зачем нужен флаг `JSON_UNESCAPED_UNICODE`?
3. Что произойдёт, если два пользователя одновременно запишут файл без `LOCK_EX`?
4. Как получить дату через 7 дней от сегодняшней?
5. Почему для больших проектов вместо JSON-файла используют базу данных?

## Дополнительные материалы

1. [php.net: Файловая система](https://www.php.net/manual/ru/ref.filesystem.php)
