# [Stage#0.](../../README.md) Условия, циклы и функции в PHP

## В данном модуле студентам необходимо:

1. Разобраться со сравнением значений: `==` и `===`.
2. Освоить условия `if`, `match` и тернарный оператор.
3. Освоить циклы `for`, `while`, `foreach`.
4. Научиться писать функции с типами аргументов и возвращаемого значения.
5. Понять область видимости переменных.

## Приблизительное время прохождения модуля

Теория: 4 часа
Практика: 5 часов

## Теория

1. [php.net: Операторы сравнения](https://www.php.net/manual/ru/language.operators.comparison.php) (0.5 часа)
2. [php.net: Управляющие конструкции](https://www.php.net/manual/ru/language.control-structures.php) — `if`, `else`, `elseif`, `while`, `for`, `foreach`, `break`, `continue`, `match` (1.5 часа)
3. [php.net: Функции](https://www.php.net/manual/ru/language.functions.php) — пользовательские функции, аргументы, возврат значений (1 час)
4. [Code Basics: PHP](https://ru.code-basics.com/languages/php) — модули «Логика», «Условные конструкции», «Циклы», «Функции» (1 час)

### Сравнение

```php
var_dump(5 == '5');    // true  — сравнение с приведением типов
var_dump(5 === '5');   // false — сравнение без приведения: разные типы
var_dump(0 == '');     // false в PHP 8
var_dump(null ?? 'по умолчанию'); // 'по умолчанию'
```

Используйте `===` и `!==` по умолчанию.

### Условия

```php
$hour = (int) date('H');

if ($hour < 12) {
    $greeting = 'Доброе утро';
} elseif ($hour < 18) {
    $greeting = 'Добрый день';
} else {
    $greeting = 'Добрый вечер';
}

$discount = $isStudent ? 10 : 0;

$sizeName = match ($size) {
    's' => 'Маленький',
    'm' => 'Средний',
    'l' => 'Большой',
    default => 'Неизвестно',
};
```

### Циклы

```php
for ($i = 1; $i <= 10; $i++) {
    echo $i . ' ';
}

$n = 1;
while ($n < 1000) {
    $n *= 2;
}

$drinks = ['Эспрессо', 'Латте', 'Капучино'];
foreach ($drinks as $index => $drink) {
    echo ($index + 1) . ". {$drink}\n";
}
```

### Функции

```php
<?php

declare(strict_types=1);

function calculatePrice(float $price, int $quantity, int $discountPercent = 0): float
{
    $total = $price * $quantity;

    return $total - $total * $discountPercent / 100;
}

echo calculatePrice(200, 3);         // 600
echo calculatePrice(200, 3, 10);     // 540
```

- `declare(strict_types=1)` — PHP не будет молча превращать `'3'` в `3`, а выдаст ошибку.
- Переменные внутри функции не видны снаружи, и наоборот. Данные передаются через аргументы и `return`.

## Практика

1. Написать функцию `isLeapYear(int $year): bool`.
2. Написать функцию `getGrade(int $score): string`, которая возвращает `A` (90+), `B` (75+), `C` (60+) или `F` через `match (true)`.
3. Вывести таблицу умножения 10×10 в HTML через два цикла `for`.
4. Решить задачи [Codewars. Часть #2](../codewars/README.md).
5. Пройти тест [St0] Условия, циклы, функции: ответить на вопросы ниже.

## Вопросы для самопроверки

1. Чем `==` отличается от `===`?
2. Чем `match` отличается от `switch`?
3. Когда использовать `for`, а когда `foreach`?
4. Чем `break` отличается от `continue`?
5. Что делает `declare(strict_types=1)`?
6. Видна ли переменная, объявленная внутри функции, снаружи?
7. Что вернёт функция без `return`?

## Дополнительные материалы

1. [php.net: Стрелочные функции](https://www.php.net/manual/ru/functions.arrow.php)
2. [Exercism: PHP](https://exercism.org/tracks/php) — задачи с менторами
