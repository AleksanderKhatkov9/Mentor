# Задачи модуля «Алгоритмы и структуры данных (часть 2)»

[← К модулю](./README.md)

Решения кладутся в `stage0/algorithms/part-2/`, по одному файлу на задачу. В комментарии к функции — сложность по времени и памяти. Каждая задача — 20 баллов.

## 1. binary-search

Файл `binary-search.php`.

```php
function binarySearch(array $sorted, int $target): int
```

Вернуть индекс `$target` в отсортированном по возрастанию массиве или `-1`. Сложность — O(log n). Функции `array_search` и `in_array` запрещены.

```php
binarySearch([1, 3, 5, 7, 9, 11], 7);  // 3
binarySearch([1, 3, 5, 7, 9, 11], 4);  // -1
binarySearch([], 1);                   // -1
```

## 2. deep-sum

Файл `deep-sum.php`.

```php
function deepSum(array $arr): int
```

Сумма всех чисел в массиве любой вложенности. Решить рекурсией.

```php
deepSum([1, 2, 3]);                    // 6
deepSum([1, [2, [3, [4]]], 5]);        // 15
deepSum([[], [[]], [[[10]]]]);         // 10
```

## 3. bubble-and-selection-sort

Файл `sorting.php`.

```php
function bubbleSort(array $arr): array
function selectionSort(array $arr): array
```

Отсортировать массив чисел по возрастанию. Функции `sort`, `usort` и другие встроенные сортировки запрещены. По 10 баллов за функцию.

```php
bubbleSort([5, 1, 4, 2, 8]);      // [1, 2, 4, 5, 8]
selectionSort([3, -1, 0, 3, 2]);  // [-1, 0, 2, 3, 3]
```

## 4. two-sum

Файл `two-sum.php`.

```php
function twoSum(array $nums, int $target): array
```

Вернуть индексы двух чисел, сумма которых равна `$target`. Гарантируется, что ответ ровно один. Сложность — O(n).

```php
twoSum([2, 7, 11, 15], 9);  // [0, 1]
twoSum([3, 2, 4], 6);       // [1, 2]
twoSum([3, 3], 6);          // [0, 1]
```

После решения сдать эту же задачу на [LeetCode: Two Sum](https://leetcode.com/problems/two-sum/).

## 5. first-unique-char

Файл `first-unique-char.php`.

```php
function firstUniqueChar(string $s): int
```

Вернуть индекс первого символа, который встречается в строке один раз, или `-1`. Строка состоит из строчных латинских букв. Сложность — O(n).

```php
firstUniqueChar('leetcode');      // 0
firstUniqueChar('loveleetcode');  // 2
firstUniqueChar('aabb');          // -1
```

После решения сдать на [LeetCode: First Unique Character in a String](https://leetcode.com/problems/first-unique-character-in-a-string/).
