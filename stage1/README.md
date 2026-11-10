# 🎓 Mentor. PHP Backend Course. Stage#1 (Core PHP)

## 🚀 Overview

- 📣 **Для кого:** для тех, кто прошёл [Stage 0](../stage0/README.md) или уже умеет писать простые программы
- 📅 **Длительность:** 12 недель, 01.02.2027 – 25.04.2027
- ⏱️ **Нагрузка:** 20–25 часов в неделю
- 📚 **Формат:** самостоятельное изучение + задания с автотестами + проекты с кросс-чеком + тесты + алгоритмы
- 🎯 **Цель этапа:** уверенно писать на PHP 8 без фреймворка: типы, функции, строки, массивы, ООП, структуры данных, HTTP

### 📝 Что будет изучено

#### 📌 Язык

- Типы данных, операторы, строгая типизация
- Условия, циклы, функции, замыкания
- Строки, многобайтовые строки, регулярные выражения
- Массивы и функции для работы с ними
- Исключения, файлы, JSON, CSV

#### 🧰 Инструменты

- Composer, автозагрузка, пространства имён
- Стандарты PSR-1, PSR-4, PSR-12
- PHPUnit, PHPStan, PHP-CS-Fixer

#### 🧩 ООП

- Классы, интерфейсы, абстрактные классы, трейты, enum
- SOLID, Value Object, DTO
- Паттерны Strategy, Factory, Decorator, Observer, Adapter

#### 🧠 Алгоритмы

- Big O, сортировки, бинарный поиск
- Стек, очередь, связный список, хеш-таблица
- Рекурсия, деревья, генераторы

#### 🌐 Веб

- HTTP, формы, сессии, cookies
- Безопасность: XSS, CSRF, хранение паролей

---

## 🛠️ Что нужно до старта

- ✅ Пройден Stage 0: настроены PHP 8.3+, Composer, Git
- 🧮 Умение решать задачи Codewars 8 kyu на PHP
- 📄 Базовые HTML и CSS

---

## ⚙️ Подготовка репозитория

Все задания с автотестами делаются в одном проекте `stage1/` с общим Composer:

```bash
cd stage1
composer init --name="yourname/stage1" --type=project
composer require --dev phpunit/phpunit phpstan/phpstan friendsofphp/php-cs-fixer
```

```json
{
    "autoload": {
        "psr-4": { "Stage1\\": "src/" }
    },
    "autoload-dev": {
        "psr-4": { "Stage1\\Tests\\": "tests/" }
    },
    "scripts": {
        "test": "phpunit tests",
        "stan": "phpstan analyse src --level=5",
        "cs": "php-cs-fixer fix src --dry-run --diff"
    }
}
```

```text
stage1/
├── composer.json
├── src/
│   ├── Numbers.php
│   ├── ConditionsLoops.php
│   └── ...
└── tests/
    ├── NumbersTest.php
    └── ...
```

Каждая функция начинается с `declare(strict_types=1);` и имеет типы всех аргументов и возвращаемого значения.

---

## 🧮 Баллы этапа

| Неделя | Задание | Баллы | Проверка |
| --- | --- | --- | --- |
| 1 | core-php-numbers | 70 | автотесты |
| 2 | core-php-conditions-n-loops | 80 | автотесты |
| 3 | core-php-strings | 80 | автотесты |
| 4 | core-php-arrays | 100 | автотесты |
| 5 | algorithms-sorting | 100 | автотесты |
| 6 | CLI Report Generator | 150 | кросс-чек |
| 7 | basic-php-ds | 100 | автотесты |
| 8 | OOP Bank | 100 | автотесты |
| 9 | Shop Cart | 150 | кросс-чек |
| 10 | recursion-n-trees | 100 | автотесты |
| 11 | Guest Book | 150 | кросс-чек |
| 12 | Self-introduction | 50 | ментор |
| — | Тесты (16 × 10) | 160 | самопроверка |
| — | Алгоритмы | 440 | LeetCode |
| | **Итого** | **1830** | |

**Порог перехода в Stage 2:** 1200 баллов и пройденное техническое собеседование.

---

## Training Program

### Week #1. Типы и операторы

#### 1 февраля 2027 — дедлайн 7 февраля 2027

- Modules:
  - **Типы данных** — [php.net](https://www.php.net/manual/ru/language.types.php)
    - Скалярные: `int`, `float`, `string`, `bool`
    - Составные: `array`, `object`, `callable`, `iterable`
    - Специальные: `null`, `mixed`, `void`, `never`
    - Объединения `int|string`, nullable `?int`
    - Ограничения `int` и `float`: `PHP_INT_MAX`, неточность `0.1 + 0.2`
  - **Приведение типов**
    - Явное: `(int)`, `(string)`, `intval()`
    - Неявное: в арифметике, сравнении, условиях
    - Что считается `false`: `0`, `""`, `"0"`, `[]`, `null`
    - `declare(strict_types=1)` и что меняется
  - **Операторы** — [php.net](https://www.php.net/manual/ru/language.operators.php)
    - Арифметические, `%`, `**`, `intdiv()`
    - Сравнение: `==` и `===`, `<=>`
    - Логические, приоритет `&&` и `and`
    - `??`, `??=`, `?:`
    - Инкремент и декремент
  - **Константы**: `define`, `const`, встроенные константы
  - **Отладка**: `var_dump`, `gettype`, `get_debug_type`
  - **Первые тесты**: что такое PHPUnit, структура теста, `assertSame`, запуск `composer test`

- Tasks:
  - [core-php-numbers](#core-php-numbers) — 70

- Tests:
  - [St1] Types & Operators — 10

- Algorithms:
  - [Two Sum](https://leetcode.com/problems/two-sum/) — 10
  - [Palindrome Number](https://leetcode.com/problems/palindrome-number/) — 5
  - [Fizz Buzz](https://leetcode.com/problems/fizz-buzz/) — 5
  - [Add Digits](https://leetcode.com/problems/add-digits/) — 5

### Week #2. Условия, циклы, функции

#### 8 февраля 2027 — дедлайн 14 февраля 2027

- Modules:
  - **Условия**: `if / elseif / else`, `switch`, `match`, отличия `match` от `switch`
  - **Циклы**: `for`, `while`, `do-while`, `foreach`, `break`, `continue`, вложенные циклы
  - **Функции** — [php.net](https://www.php.net/manual/ru/language.functions.php)
    - Объявление, аргументы, значения по умолчанию
    - Передача по значению и по ссылке `&`
    - Named arguments, variadic `...$args`, распаковка
    - Возвращаемые типы, `void`, `never`
    - Область видимости, `global`, `static`
  - **Замыкания**
    - Анонимные функции, `use`, `use (&$x)`
    - Стрелочные функции `fn`, автоматический захват
    - First-class callable `strlen(...)`
    - Функции высшего порядка
  - **Рекурсия** на простых примерах: факториал, числа Фибоначчи

- Tasks:
  - [core-php-conditions-n-loops](#core-php-conditions-n-loops) — 80

- Tests:
  - [St1] Conditions & Loops — 10
  - [St1] Functions & Scope — 10

- Algorithms:
  - [Valid Parentheses](https://leetcode.com/problems/valid-parentheses/) — 10
  - [Roman to Integer](https://leetcode.com/problems/roman-to-integer/) — 10
  - [Climbing Stairs](https://leetcode.com/problems/climbing-stairs/) — 10

### Week #3. Строки и регулярные выражения

#### 15 февраля 2027 — дедлайн 21 февраля 2027

- Modules:
  - **Строки** — [php.net](https://www.php.net/manual/ru/language.types.string.php)
    - Одинарные и двойные кавычки, интерполяция `{$user->name}`
    - Heredoc и nowdoc
    - Экранирование
  - **Функции строк**
    - `strlen`, `str_contains`, `str_starts_with`, `str_ends_with`
    - `substr`, `strpos`, `str_replace`, `trim`
    - `explode`, `implode`, `str_split`
    - `sprintf`, `number_format`, `str_pad`, `str_repeat`
    - `strtolower`, `ucfirst`, `ucwords`
  - **Многобайтовые строки**
    - Почему `strlen("Привет")` равно 12
    - `mb_strlen`, `mb_substr`, `mb_strtoupper`, `mb_str_split`
    - Кодировка UTF-8
  - **Регулярные выражения** — [php.net: PCRE](https://www.php.net/manual/ru/book.pcre.php)
    - Символы, классы, квантификаторы, группы, якоря
    - Модификаторы `i`, `u`, `m`
    - `preg_match`, `preg_match_all`, `preg_replace`, `preg_replace_callback`, `preg_split`
    - Тренажёр: [regex101](https://regex101.com/) (режим PCRE2)

- Tasks:
  - [core-php-strings](#core-php-strings) — 80

- Tests:
  - [St1] Strings & Regex — 10

- Algorithms:
  - [Valid Anagram](https://leetcode.com/problems/valid-anagram/) — 5
  - [Valid Palindrome](https://leetcode.com/problems/valid-palindrome/) — 5
  - [Longest Common Prefix](https://leetcode.com/problems/longest-common-prefix/) — 10
  - [Reverse Words in a String](https://leetcode.com/problems/reverse-words-in-a-string/) — 10

### Week #4. Массивы

#### 22 февраля 2027 — дедлайн 28 февраля 2027

- Modules:
  - **Массивы** — [php.net](https://www.php.net/manual/ru/language.types.array.php)
    - Индексные, ассоциативные, многомерные
    - Ключи: какие типы допустимы и как приводятся
    - Деструктуризация `[$a, $b] = $arr`, `['id' => $id] = $row`
    - Оператор spread `[...$a, ...$b]`
    - Массивы копируются при присваивании (copy-on-write), ссылки в `foreach`
  - **Функции массивов** — [php.net](https://www.php.net/manual/ru/ref.array.php)
    - Добавление и удаление: `array_push`, `array_pop`, `array_shift`, `array_unshift`, `array_splice`
    - Поиск: `in_array`, `array_search`, `array_key_exists`, `isset`
    - Преобразование: `array_map`, `array_filter`, `array_reduce`, `array_walk`
    - Ключи и значения: `array_keys`, `array_values`, `array_flip`, `array_column`, `array_combine`
    - Множества: `array_unique`, `array_diff`, `array_intersect`, `array_merge`
    - Сортировки: `sort`, `rsort`, `asort`, `ksort`, `usort`, `uasort`, стабильность сортировки
  - **Функциональный стиль**: цепочки `array_map` и `array_filter`, чистые функции

- Tasks:
  - [core-php-arrays](#core-php-arrays) — 100

- Tests:
  - [St1] Arrays — 10

- Algorithms:
  - [Contains Duplicate](https://leetcode.com/problems/contains-duplicate/) — 5
  - [Best Time to Buy and Sell Stock](https://leetcode.com/problems/best-time-to-buy-and-sell-stock/) — 10
  - [Rotate Array](https://leetcode.com/problems/rotate-array/) — 10
  - [Move Zeroes](https://leetcode.com/problems/move-zeroes/) — 5
  - [Majority Element](https://leetcode.com/problems/majority-element/) — 5

### Week #5. Сложность алгоритмов и сортировки

#### 1 марта 2027 — дедлайн 7 марта 2027

- Modules:
  - **Сложность алгоритмов**
    - Зачем оценивать сложность
    - O(1), O(log n), O(n), O(n log n), O(n²), O(2ⁿ)
    - Лучший, худший и средний случай
    - Сложность по памяти
    - Как оценить сложность своего кода: циклы, вложенные циклы, рекурсия
  - **Сортировки**
    - Простые O(n²): пузырьком, выбором, вставками
    - Эффективные O(n log n): слиянием, быстрая, выбор опорного элемента
    - Сортировка подсчётом O(n + k)
    - Устойчивость сортировки
    - Как работает `sort()` в PHP (гибридный алгоритм zend_sort)
  - **Поиск**
    - Линейный O(n)
    - Бинарный O(log n), граничные случаи, поиск левой и правой границы
  - Материал: Бхаргава «Грокаем алгоритмы», гл. 1–4; [визуализация сортировок](https://visualgo.net/en/sorting)

- Tasks:
  - [algorithms-sorting](#algorithms-sorting) — 100

- Tests:
  - [St1] Big O & Sorting — 10

- Algorithms:
  - [Binary Search](https://leetcode.com/problems/binary-search/) — 5
  - [Search Insert Position](https://leetcode.com/problems/search-insert-position/) — 5
  - [First Bad Version](https://leetcode.com/problems/first-bad-version/) — 5
  - [Sort Colors](https://leetcode.com/problems/sort-colors/) — 15
  - [Merge Sorted Array](https://leetcode.com/problems/merge-sorted-array/) — 10

### Week #6. Исключения, файлы, Composer, Clean Code

#### 8 марта 2027 — дедлайн 14 марта 2027

- Modules:
  - **Ошибки и исключения** — [php.net](https://www.php.net/manual/ru/language.exceptions.php)
    - Ошибки, предупреждения, `Error` и `Exception`
    - Иерархия `Throwable`, встроенные исключения SPL
    - `try / catch / finally`, несколько `catch`, повторный выброс
    - Свои классы исключений
  - **Файлы**
    - `file_get_contents`, `file_put_contents`, `file()`
    - `fopen`, `fgets`, `fgetcsv`, `fputcsv`, `fclose`
    - Чтение больших файлов построчно
    - JSON: `json_encode`, `json_decode`, флаги, `JSON_THROW_ON_ERROR`
  - **Composer** — [getcomposer.org](https://getcomposer.org/doc/)
    - `composer.json` и `composer.lock`
    - `require` и `require-dev`, версии `^` и `~`
    - Автозагрузка PSR-4, `vendor/autoload.php`
    - Скрипты Composer
  - **Пространства имён**: `namespace`, `use`, псевдонимы
  - **Стандарты**: [PSR-1](https://www.php-fig.org/psr/psr-1/), [PSR-4](https://www.php-fig.org/psr/psr-4/), [PSR-12](https://www.php-fig.org/psr/psr-12/)
  - **Clean Code**
    - Имена, маленькие функции, одна ответственность, ранний возврат
    - Магические числа, дублирование
    - PHP-CS-Fixer и PHPStan: настройка и запуск
    - Материал: Роберт Мартин «Чистый код», гл. 1–3; [Clean Code PHP](https://github.com/piotrplenik/clean-code-php)

- Tasks:
  - [CLI Report Generator](#cli-report-generator) — 150, кросс-чек

- Tests:
  - [St1] Exceptions & Files — 10
  - [St1] Composer & PSR — 10

- Algorithms:
  - [Group Anagrams](https://leetcode.com/problems/group-anagrams/) — 15
  - [Top K Frequent Elements](https://leetcode.com/problems/top-k-frequent-elements/) — 15

### Week #7. Структуры данных

#### 15 марта 2027 — дедлайн 21 марта 2027

- Cross-Check Reviews:
  - Кросс-чек проекта CLI Report Generator: 15 – 18 марта

- Modules:
  - **Абстрактные типы данных**
    - Стек: LIFO, применение (скобки, отмена действий, стек вызовов)
    - Очередь: FIFO, дек, кольцевой буфер
    - Связный список: односвязный и двусвязный, сравнение с массивом
    - Хеш-таблица: хеш-функция, коллизии, цепочки и открытая адресация, коэффициент заполнения
    - Множество
  - **Как устроен массив PHP**: упорядоченная хеш-таблица, packed array, почему `array_shift` медленный
  - **SPL** — [php.net](https://www.php.net/manual/ru/spl.datastructures.php)
    - `SplStack`, `SplQueue`, `SplDoublyLinkedList`
    - `SplFixedArray`, `SplObjectStorage`
    - `SplMinHeap`, `SplMaxHeap`, `SplPriorityQueue`

- Tasks:
  - [basic-php-ds](#basic-php-ds) — 100

- Tests:
  - [St1] Data Structures — 10

- Algorithms:
  - [Reverse Linked List](https://leetcode.com/problems/reverse-linked-list/) — 10
  - [Merge Two Sorted Lists](https://leetcode.com/problems/merge-two-sorted-lists/) — 10
  - [Linked List Cycle](https://leetcode.com/problems/linked-list-cycle/) — 10
  - [Min Stack](https://leetcode.com/problems/min-stack/) — 15
  - [LRU Cache](https://leetcode.com/problems/lru-cache/) — 20

### Week #8. ООП, часть 1

#### 22 марта 2027 — дедлайн 28 марта 2027

- Modules:
  - **Классы и объекты** — [php.net](https://www.php.net/manual/ru/language.oop5.php)
    - Класс, объект, свойства, методы, `$this`
    - Конструктор, promoted properties
    - Типизированные свойства, `readonly` свойства и классы
    - Модификаторы `public`, `protected`, `private`
    - `static`, `self`, константы класса
  - **Наследование**
    - `extends`, переопределение, `parent::`
    - Абстрактные классы и методы
    - `final`
    - Когда наследование вредно: композиция вместо наследования
  - **Интерфейсы**
    - Контракт, `implements`, несколько интерфейсов
    - Полиморфизм
    - Встроенные интерфейсы: `Countable`, `Stringable`, `JsonSerializable`
  - **Магические методы**: `__construct`, `__toString`, `__get`, `__set`, `__call`, `__invoke`
  - **Принципы ООП**: инкапсуляция, наследование, полиморфизм, абстракция

- Tasks:
  - [OOP Bank](#oop-bank) — 100

- Tests:
  - [St1] OOP Basics — 10

- Algorithms:
  - [Implement Queue using Stacks](https://leetcode.com/problems/implement-queue-using-stacks/) — 10
  - [Design HashMap](https://leetcode.com/problems/design-hashmap/) — 10
  - [Middle of the Linked List](https://leetcode.com/problems/middle-of-the-linked-list/) — 5

### Week #9. ООП, часть 2

#### 29 марта 2027 — дедлайн 4 апреля 2027

- Modules:
  - **Возможности PHP 8**
    - Трейты: подключение, конфликты, когда использовать
    - `enum`: pure и backed, методы, `cases()`, `from()`, `tryFrom()`
    - Атрибуты
    - Позднее статическое связывание `static::`
    - Клонирование, `__clone`, глубокая копия
    - Сравнение объектов `==` и `===`
  - **Проектирование объектов**
    - Value Object: неизменяемость, сравнение по значению
    - DTO
    - Entity и Value Object
  - **SOLID**
    - S — единственная ответственность
    - O — открытость для расширения
    - L — подстановка Лисков
    - I — разделение интерфейсов
    - D — инверсия зависимостей, внедрение зависимостей через конструктор
  - **Паттерны**: Strategy, Factory Method, Decorator, Observer, Adapter, Singleton и почему его избегают
  - Материал: [Refactoring.Guru: Паттерны](https://refactoring.guru/ru/design-patterns/php), [DesignPatternsPHP](https://designpatternsphp.readthedocs.io/ru/latest/)

- Tasks:
  - [Shop Cart](#shop-cart) — 150, кросс-чек

- Tests:
  - [St1] OOP Advanced — 10
  - [St1] SOLID & Patterns — 10

- Algorithms:
  - [Longest Substring Without Repeating Characters](https://leetcode.com/problems/longest-substring-without-repeating-characters/) — 15
  - [Container With Most Water](https://leetcode.com/problems/container-with-most-water/) — 15
  - [Two Sum II](https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/) — 10

### Week #10. Рекурсия, деревья, генераторы

#### 5 апреля 2027 — дедлайн 11 апреля 2027

- Cross-Check Reviews:
  - Кросс-чек проекта Shop Cart: 5 – 8 апреля

- Modules:
  - **Рекурсия**
    - Базовый случай и шаг рекурсии
    - Стек вызовов, переполнение стека
    - Мемоизация
    - Перебор с возвратом (backtracking): перестановки, сочетания, подмножества
  - **Деревья**
    - Корень, узел, лист, высота, глубина
    - Бинарное дерево, бинарное дерево поиска
    - Обходы в глубину: прямой, симметричный, обратный
    - Обход в ширину через очередь
    - Сбалансированные деревья (обзор)
  - **Итераторы и генераторы** — [php.net](https://www.php.net/manual/ru/language.generators.php)
    - `yield`, `yield from`, ключи
    - Экономия памяти при обработке больших данных
    - `Iterator`, `IteratorAggregate`

- Tasks:
  - [recursion-n-trees](#recursion-n-trees) — 100

- Tests:
  - [St1] Recursion & Trees — 10

- Algorithms:
  - [Maximum Depth of Binary Tree](https://leetcode.com/problems/maximum-depth-of-binary-tree/) — 5
  - [Invert Binary Tree](https://leetcode.com/problems/invert-binary-tree/) — 5
  - [Same Tree](https://leetcode.com/problems/same-tree/) — 5
  - [Validate Binary Search Tree](https://leetcode.com/problems/validate-binary-search-tree/) — 15
  - [Binary Tree Level Order Traversal](https://leetcode.com/problems/binary-tree-level-order-traversal/) — 15
  - [Subsets](https://leetcode.com/problems/subsets/) — 15

### Week #11. HTTP и PHP без фреймворка

#### 12 апреля 2027 — дедлайн 18 апреля 2027

- Modules:
  - **HTTP** — [MDN](https://developer.mozilla.org/ru/docs/Web/HTTP)
    - Методы и идемпотентность
    - Статусы: 2xx, 3xx, 4xx, 5xx
    - Заголовки: `Content-Type`, `Location`, `Set-Cookie`, `Cache-Control`
    - Редирект после POST (паттерн PRG)
  - **PHP в вебе**
    - Как PHP обрабатывает запрос: веб-сервер, PHP-FPM, жизненный цикл запроса
    - `$_GET`, `$_POST`, `$_SERVER`, `$_FILES`, `$_COOKIE`
    - `header()`, `http_response_code()`
    - Единая точка входа `index.php`, простой роутер
    - Шаблоны: разделение логики и HTML
  - **Состояние**
    - Cookies: параметры `HttpOnly`, `Secure`, `SameSite`
    - Сессии: `session_start`, `$_SESSION`, `session_regenerate_id`
    - Загрузка файлов: проверка типа и размера
  - **Безопасность** — [PHP: The Right Way](https://phptherightway.com/#security), [OWASP Top 10](https://owasp.org/www-project-top-ten/)
    - XSS и `htmlspecialchars`
    - CSRF и токены
    - Хранение паролей: `password_hash`, `password_verify`
    - Валидация и фильтрация входных данных: `filter_var`

- Tasks:
  - [Guest Book](#guest-book) — 150, кросс-чек

- Tests:
  - [St1] HTTP — 10
  - [St1] Web Security — 10

- Algorithms:
  - [Product of Array Except Self](https://leetcode.com/problems/product-of-array-except-self/) — 15
  - [3Sum](https://leetcode.com/problems/3sum/) — 20

### Week #12. Повторение и техническое собеседование

#### 19 апреля 2027 — дедлайн 25 апреля 2027

- Cross-Check Reviews:
  - Кросс-чек проекта Guest Book: 19 – 22 апреля

- Modules:
  - Повторение всех тем этапа по вопросам для самопроверки
  - Как проходит техническое собеседование
  - Как решать задачу вслух: уточнить условие, предложить решение, оценить сложность, написать код, проверить на примерах

- Tasks:
  - [Self-introduction](#self-introduction) — 50
  - **Technical Screening** с ментором — допуск к Stage 2

- Tests:
  - [St1] Final test Stage 1 — 10

- Algorithms:
  - 5 задач уровня Easy из [NeetCode 150](https://neetcode.io/practice), которые ещё не решены — по 5

---

## 📋 Tasks

### core-php-numbers

Файл `src/Numbers.php`, тесты `tests/NumbersTest.php`.

| Функция | Пример |
| --- | --- |
| `getRectangleArea(float $width, float $height): float` | `(5, 10)` → `50.0` |
| `getAverage(int ...$numbers): float` | `(1, 2, 3, 4)` → `2.5` |
| `isPrime(int $n): bool` | `17` → `true` |
| `getDigitsSum(int $n): int` | `12345` → `15` |
| `roundToPowerOfTen(int $num, int $pow): int` | `(1678, 2)` → `1700` |
| `getFactorial(int $n): int` | `5` → `120` |
| `isPowerOfTwo(int $n): bool` | `16` → `true` |

**Критерии — 70 баллов:**

- +49 — по 7 за каждую функцию, проходящую тесты
- +11 — `strict_types` и типы у всех аргументов и возвращаемых значений
- +10 — свои тесты на граничные случаи: 0, отрицательные числа, большие значения

### core-php-conditions-n-loops

Файл `src/ConditionsLoops.php`. **Запрещены** встроенные функции массивов и строк, кроме `count()` и `strlen()`. Только условия и циклы.

| Функция | Пример |
| --- | --- |
| `getFizzBuzz(int $n): string\|int` | `15` → `'FizzBuzz'` |
| `getSumBetween(int $a, int $b): int` | `(1, 5)` → `15` |
| `isTriangle(int $a, int $b, int $c): bool` | `(1, 2, 10)` → `false` |
| `convertToRoman(int $n): string` | `1994` → `'MCMXCIV'` |
| `reverseNumber(int $n): int` | `12345` → `54321` |
| `getSpiralMatrix(int $size): array` | `3` → `[[1,2,3],[8,9,4],[7,6,5]]` |
| `getBalanceIndex(array $arr): int` | `[1, 2, 5, 3, 0]` → `2` |
| `isBracketsBalanced(string $str): bool` | `'([]{})'` → `true` |

**Критерии — 80 баллов:** +10 за каждую функцию. −10 за каждое использование запрещённой функции.

### core-php-strings

Файл `src/Strings.php`. Все функции работают с кириллицей.

| Функция | Пример |
| --- | --- |
| `capitalizeWords(string $s): string` | `'привет мир'` → `'Привет Мир'` |
| `isPalindrome(string $s): bool` | `'А роза упала на лапу Азора'` → `true` |
| `countVowels(string $s): int` | `'Hello Мир'` → `3` |
| `encodeRot13(string $s): string` | `'hello'` → `'uryyb'` |
| `getStringFromTemplate(string $tpl, array $data): string` | `('Hi, {name}', ['name' => 'Ann'])` → `'Hi, Ann'` |
| `isValidEmail(string $s): bool` | `'a@b.ru'` → `true` |
| `compressString(string $s): string` | `'aaabbc'` → `'a3b2c1'` |
| `formatPhone(string $digits): string` | `'79991234567'` → `'+7 (999) 123-45-67'` |

**Критерии — 80 баллов:** +10 за каждую функцию.

### core-php-arrays

Файл `src/Arrays.php`. Цикл `for` запрещён — только функции массивов и `foreach`.

| Функция | Пример |
| --- | --- |
| `chunk(array $arr, int $size): array` | `([1,2,3,4,5], 2)` → `[[1,2],[3,4],[5]]` |
| `flatten(array $arr): array` | `[1,[2,[3,[4]]]]` → `[1,2,3,4]` |
| `groupBy(array $items, string $key): array` | группировка пользователей по городу |
| `uniqueBy(array $items, callable $fn): array` | уникальные по email |
| `sortByMultiple(array $rows, array $fields): array` | `['city' => 'asc', 'age' => 'desc']` |
| `getIntersection(array $a, array $b): array` | `([1,2,3], [2,3,4])` → `[2,3]` |
| `rotate(array $arr, int $k): array` | `([1,2,3,4,5], 2)` → `[4,5,1,2,3]` |
| `getTopN(array $arr, int $n): array` | `([5,1,9,3], 2)` → `[9,5]` |
| `zip(array ...$arrays): array` | `([1,2], ['a','b'])` → `[[1,'a'],[2,'b']]` |
| `pivot(array $rows, string $row, string $col, string $value): array` | сводная таблица продаж: месяц × товар |

**Критерии — 100 баллов:** +10 за каждую функцию.

### algorithms-sorting

Файл `src/Sorting.php`. Встроенные функции сортировки запрещены.

**Критерии — 100 баллов:**

- +10 — `bubbleSort(array $arr): array`
- +10 — `insertionSort(array $arr): array`
- +10 — `selectionSort(array $arr): array`
- +20 — `mergeSort(array $arr): array`
- +20 — `quickSort(array $arr): array`
- +10 — `binarySearch(array $sorted, int $target): int` — индекс или `-1`
- +20 — `benchmark.php`: время всех сортировок и `sort()` на массивах 1 000, 10 000 и 100 000 случайных чисел. Таблица результатов и выводы в README задания

### CLI Report Generator

Консольное приложение `stage1/report-generator/`, отдельный `composer.json`.

**Задача:** прочитать CSV с продажами (`date,product,category,quantity,price`) и вывести отчёт.

```bash
php bin/report sales.csv --format=table
php bin/report sales.csv --format=json --from=2026-01-01 --to=2026-06-30
```

**Отчёт содержит:** выручку по месяцам, топ-5 товаров по выручке, выручку по категориям, средний чек.

**Критерии — 150 баллов:**

- +30 — отчёт верный на эталонном файле
- +20 — форматы `table`, `json`, `csv`
- +10 — фильтр по датам
- +20 — понятные сообщения об ошибках: нет файла, неверный формат, битые строки (свои исключения). Битые строки пропускаются и выводятся в конце
- +20 — структура PSR-4, автозагрузка Composer, классы с одной ответственностью
- +20 — PHP-CS-Fixer и PHPStan уровня 5 без ошибок
- +20 — тесты PHPUnit на расчёты
- +10 — README с примером запуска и вывода

### basic-php-ds

Файлы `src/DataStructures/*.php`. SPL и функции `array_push`, `array_pop`, `array_shift` запрещены.

**Критерии — 100 баллов:**

- +15 — `Stack`: `push`, `pop`, `peek`, `isEmpty`, `size`
- +15 — `Queue` на двух стеках: `enqueue`, `dequeue`, `peek`, амортизированное O(1)
- +25 — `LinkedList`: `append`, `prepend`, `insertAt`, `remove`, `find`, `reverse`, `toArray`, реализует `IteratorAggregate`
- +25 — `HashMap`: `set`, `get`, `has`, `delete`, цепочки для коллизий, увеличение размера при заполнении больше 75%
- +20 — `LruCache`: `get` и `put` за O(1), ограничение по размеру

### OOP Bank

Папка `src/Bank/`.

**Задача:** модель банка со счетами.

- `Account` (абстрактный): номер, владелец, баланс, история операций
- `DebitAccount`: нельзя уйти в минус
- `SavingsAccount`: начисление процентов, не больше 3 снятий в месяц
- `CreditAccount`: кредитный лимит, комиссия за снятие
- `Transaction`: тип, сумма, дата, баланс после операции
- `Bank`: открыть счёт, найти счёт, перевести между счетами

**Критерии — 100 баллов:**

- +20 — инкапсуляция: баланс меняется только через методы
- +20 — общая логика в абстрактном классе, отличия в наследниках
- +20 — интерфейсы (например, `HasInterest`), полиморфный вызов
- +20 — свои исключения: `InsufficientFundsException`, `InvalidAmountException`, `AccountNotFoundException`. Перевод атомарный: при ошибке не меняется ни один счёт
- +20 — тесты PHPUnit на все сценарии

### Shop Cart

Папка `stage1/shop-cart/`, отдельный `composer.json`.

**Задача:** корзина интернет-магазина.

- Товары, количество, добавление и удаление
- Скидки: процент, фиксированная сумма, «3 по цене 2», промокод
- Доставка: курьер, самовывоз, почта — с разной стоимостью
- Налог
- Статусы заказа: новый, оплачен, отправлен, доставлен, отменён — с разрешёнными переходами

**Критерии — 150 баллов:**

- +30 — `Money` как Value Object на целых копейках, без `float`
- +30 — скидки через Strategy: новая скидка добавляется без изменения класса корзины
- +20 — статусы через `enum` с методом проверки перехода
- +20 — способ доставки через Factory
- +30 — тесты на все сценарии расчёта
- +20 — PHPStan уровня 6 без ошибок

### recursion-n-trees

Папка `src/Trees/`.

**Критерии — 100 баллов:**

- +40 — `BinarySearchTree`: `insert`, `has`, `find`, `remove` (все три случая), `min`, `max`
- +20 — обходы: прямой, симметричный, обратный, в ширину. Каждый — генератор
- +10 — `getPermutations(array $items): array`
- +10 — `getCombinations(array $items, int $k): array`
- +20 — `directoryTree(string $path): array` — рекурсивное дерево файлов и папок, и `printTree()`, который выводит его как команда `tree`

### Guest Book

Папка `stage1/guest-book/`. Без фреймворков и сторонних библиотек, кроме PHPUnit.

**Задача:** гостевая книга.

- Главная: список записей, новые сверху, по 10 на страницу
- Форма: имя, email, сообщение
- Хранение в JSON-файле
- Вход администратора, удаление записей

**Критерии — 150 баллов:**

- +30 — роутер с маршрутами `GET` и `POST`, единая точка входа
- +20 — валидация, ошибки выводятся под полями, введённые данные сохраняются
- +30 — защита от XSS и CSRF
- +20 — пагинация
- +20 — шаблоны отделены от логики
- +30 — вход администратора через сессии, пароль хранится через `password_hash`, после входа `session_regenerate_id`

### Self-introduction

Видео 3–5 минут: кто вы, почему PHP, лучший проект этапа, что было сложнее всего. Ссылку на видео — в Pull Request.

**Критерии — 50 баллов:** +20 — рассказ о себе, +20 — демонстрация проекта, +10 — уложились во время.

---

## ✅ Вопросы для самопроверки

### Типы и операторы

1. Какие типы данных есть в PHP?
2. Чем `==` отличается от `===`? Что вернёт `0 == "a"` в PHP 8?
3. Что меняет `declare(strict_types=1)`?
4. Почему `0.1 + 0.2 !== 0.3`? Как хранить деньги?
5. Чем отличаются `??` и `?:`?

### Функции

1. Чем передача по ссылке отличается от передачи по значению?
2. Чем стрелочная функция отличается от анонимной?
3. Что делает `static` внутри функции?
4. Что такое named arguments и variadic-аргументы?
5. Что такое чистая функция?

### Строки и массивы

1. Почему для кириллицы нужны функции `mb_*`?
2. Чем отличаются одинарные и двойные кавычки?
3. Как устроен массив в PHP?
4. Чем `array_merge` отличается от оператора `+` для массивов?
5. Чем `sort` отличается от `asort` и `usort`?
6. Как изменить элементы массива в `foreach`?

### Алгоритмы и структуры данных

1. Что такое O-нотация? Какая сложность у бинарного поиска, сортировки слиянием, быстрой сортировки?
2. Когда быстрая сортировка работает за O(n²)?
3. Чем стек отличается от очереди? Где они используются?
4. Как работает хеш-таблица? Что такое коллизия?
5. Какая сложность у поиска, вставки и удаления в массиве, связном списке, хеш-таблице, сбалансированном BST?

### ООП

1. Назовите принципы ООП.
2. Чем абстрактный класс отличается от интерфейса?
3. Что такое трейт и в чём его недостатки?
4. Чем `self` отличается от `static`?
5. Расшифруйте SOLID и приведите пример нарушения каждого принципа.
6. Что такое Value Object? Чем он отличается от Entity?
7. Зачем нужно внедрение зависимостей?

### Исключения, Composer, PSR

1. Чем `Error` отличается от `Exception`?
2. Когда выполняется блок `finally`?
3. Зачем нужен `composer.lock` и нужно ли его коммитить?
4. Что описывает PSR-4?
5. Что делает PHPStan?

### HTTP и безопасность

1. Какие методы HTTP идемпотентны?
2. Что такое паттерн PRG и зачем он нужен?
3. Как работает сессия в PHP?
4. Что такое XSS и как от него защититься?
5. Что такое CSRF и как от него защититься?
6. Почему нельзя хранить пароли в MD5?

---

## ❓ FAQ

### Можно ли использовать ИИ-ассистентов?

Для объяснения теории — да. Для написания решений заданий и алгоритмов — нет: на собеседовании их не будет.

### Что делать, если автотесты не проходят?

Запустить один тест: `vendor/bin/phpunit --filter testIsPrime`. Посмотреть разницу ожидаемого и полученного значения. Вопрос в чате — с текстом ошибки и кодом функции.

### Как проходит кросс-чек?

После дедлайна каждый студент получает 3 работы на проверку. Проверка идёт по критериям задания, у каждого снятого балла — комментарий. Итоговая оценка — среднее. Кто не проверил свои 3 работы, получает 0 за задание.

### Что дальше?

После набора порога и собеседования — [Stage 2. Web, Databases, Testing](../stage2/README.md).
