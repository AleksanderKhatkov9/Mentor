# [Stage#0.](../../README.md) Массивы в PHP

## В данном модуле студентам необходимо:

1. Освоить индексные и ассоциативные массивы.
2. Научиться хранить списки объектов как массив массивов.
3. Перебирать массивы через `foreach`.
4. Познакомиться с основными функциями массивов: поиск, фильтрация, преобразование, сортировка.

## Приблизительное время прохождения модуля

Теория: 3 часа
Практика: 5 часов

## Теория

1. [php.net: Массивы](https://www.php.net/manual/ru/language.types.array.php) (1 час)
2. [php.net: Функции для работы с массивами](https://www.php.net/manual/ru/ref.array.php) — прочитать описание функций из таблицы ниже (1 час)
3. [Code Basics: PHP](https://code-basics.com/ru/languages/php) или [Хекслет: PHP: Массивы](https://ru.hexlet.io/courses/php-arrays) — первые уроки (1 час)

### Виды массивов

```php
$sizes = ['S', 'M', 'L'];            // индексный: ключи 0, 1, 2
echo $sizes[0];                       // S
$sizes[] = 'XL';                      // добавить в конец

$prices = ['espresso' => 150, 'latte' => 220];  // ассоциативный
echo $prices['latte'];                // 220

$products = [                         // массив массивов — список товаров
    ['id' => 1, 'name' => 'Эспрессо', 'category' => 'coffee', 'price' => 150],
    ['id' => 2, 'name' => 'Латте', 'category' => 'coffee', 'price' => 220],
    ['id' => 3, 'name' => 'Чизкейк', 'category' => 'dessert', 'price' => 310],
];

foreach ($products as $product) {
    echo "{$product['name']} — {$product['price']} ₽\n";
}
```

### Основные функции

| Функция | Что делает |
| --- | --- |
| `count($arr)` | количество элементов |
| `in_array($value, $arr, true)` | есть ли значение |
| `array_key_exists($key, $arr)`, `isset($arr[$key])` | есть ли ключ |
| `array_keys`, `array_values` | ключи, значения |
| `array_sum`, `max`, `min` | сумма, максимум, минимум |
| `array_filter($arr, $fn)` | оставить элементы, для которых функция вернула `true` |
| `array_map($fn, $arr)` | преобразовать каждый элемент |
| `array_column($arr, 'name')` | достать один столбец из массива массивов |
| `sort`, `rsort` | сортировка значений |
| `usort($arr, $fn)` | сортировка своей функцией сравнения |
| `implode(', ', $arr)`, `explode(',', $str)` | массив в строку и обратно |

```php
$coffee = array_filter($products, fn ($p) => $p['category'] === 'coffee');

$names = array_column($products, 'name');

usort($products, fn ($a, $b) => $a['price'] <=> $b['price']);
```

`<=>` возвращает `-1`, `0` или `1` — то, что нужно `usort`.

## Практика

1. Написать функцию `getAveragePrice(array $products): float`.
2. Написать функцию `getCategories(array $products): array` — список уникальных категорий.
3. Написать функцию `getMostExpensive(array $products): array` — самый дорогой товар.
4. Выполнить задание [Coffee Shop#2. Каталог и фильтры](../../tasks/coffee-shop/coffee-shop-2.md).
5. Пройти тест [St0] Массивы: ответить на вопросы ниже.

## Вопросы для самопроверки

1. Чем индексный массив отличается от ассоциативного?
2. Как добавить элемент в конец массива?
3. Как получить список названий из массива товаров одной функцией?
4. Чем `array_filter` отличается от `array_map`?
5. Почему у `in_array` стоит передавать третий аргумент `true`?
6. Что возвращает оператор `<=>`?

## Дополнительные материалы

1. [php.net: Сортировка массивов](https://www.php.net/manual/ru/array.sorting.php)
