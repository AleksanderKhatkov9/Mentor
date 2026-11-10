# Конспект: алгоритмы и структуры данных (часть 2)

[← К модулю](./README.md)

## Бинарный поиск

Работает на **отсортированном** массиве. Смотрим на средний элемент: если искомое меньше — ищем в левой половине, если больше — в правой. Каждый шаг отбрасывает половину массива, поэтому сложность O(log n): для миллиона элементов — около 20 шагов.

```php
function binarySearch(array $sorted, int $target): int
{
    $left = 0;
    $right = count($sorted) - 1;

    while ($left <= $right) {
        $mid = intdiv($left + $right, 2);

        if ($sorted[$mid] === $target) {
            return $mid;
        }

        if ($sorted[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}
```

## Рекурсия

Рекурсивная функция вызывает сама себя. У неё всегда два элемента:

1. **Базовый случай** — когда ответ известен сразу и рекурсия останавливается.
2. **Шаг рекурсии** — задача сводится к такой же, но меньшей.

```php
function factorial(int $n): int
{
    if ($n <= 1) {           // базовый случай
        return 1;
    }

    return $n * factorial($n - 1);  // шаг рекурсии
}
```

Каждый вызов кладётся в **стек вызовов** и ждёт результата следующего. `factorial(4)` → `4 * factorial(3)` → `3 * factorial(2)` → `2 * factorial(1)` → `1`. Потом результаты возвращаются обратно: `2`, `6`, `24`.

Без базового случая функция вызывает себя бесконечно, и PHP упадёт с ошибкой нехватки памяти.

Рекурсия удобна для вложенных структур: дерево папок, вложенные массивы, меню с подменю.

```php
function countFiles(array $tree): int
{
    $count = 0;
    foreach ($tree as $item) {
        $count += is_array($item) ? countFiles($item) : 1;
    }

    return $count;
}
```

## Простые сортировки

### Пузырьком

Проходим по массиву и меняем местами соседей, если они стоят неправильно. После каждого прохода самый большой элемент «всплывает» в конец. Сложность O(n²).

```php
function bubbleSort(array $arr): array
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $swapped = false;
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
                $swapped = true;
            }
        }
        if (!$swapped) {
            break;   // массив уже отсортирован
        }
    }

    return $arr;
}
```

### Выбором

Находим минимум в неотсортированной части и ставим его в начало этой части. Сложность O(n²).

В реальном коде используют `sort()` — O(n log n). Простые сортировки нужны, чтобы понять принцип и уметь оценивать сложность.

## Ассоциативный массив как хеш-таблица

Ассоциативный массив PHP устроен как хеш-таблица: по ключу элемент находится за O(1). Это позволяет решать многие задачи за один проход.

### Подсчёт

```php
function countWords(string $text): array
{
    $counts = [];
    foreach (explode(' ', mb_strtolower($text)) as $word) {
        $counts[$word] = ($counts[$word] ?? 0) + 1;
    }

    return $counts;
}
```

### Поиск пары с суммой

Наивно — два вложенных цикла, O(n²). С хеш-таблицей: для каждого числа проверяем, встречалось ли раньше `target - число`. Один проход — O(n).

```php
function hasPairWithSum(array $numbers, int $target): bool
{
    $seen = [];
    foreach ($numbers as $number) {
        if (isset($seen[$target - $number])) {
            return true;
        }
        $seen[$number] = true;
    }

    return false;
}
```

### Группировка

```php
function groupByCategory(array $products): array
{
    $groups = [];
    foreach ($products as $product) {
        $groups[$product['category']][] = $product;
    }

    return $groups;
}
```
