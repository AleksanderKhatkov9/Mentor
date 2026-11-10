# 🎓 Mentor. PHP Backend Course. Stage#2 (Web, Databases, Testing)

## 🚀 Overview

- 📣 **Для кого:** для тех, кто прошёл [Stage 1](../stage1/README.md) и техническое собеседование
- 📅 **Длительность:** 8 недель, 26.04.2027 – 20.06.2027
- ⏱️ **Нагрузка:** 20–30 часов в неделю
- 📚 **Формат:** самостоятельное изучение + задания с ревью ментора + тесты + алгоритмы
- 👨‍🏫 **Ментор:** с этого этапа у каждого студента есть ментор. Он проверяет задания, отвечает на вопросы и проводит собеседование в конце этапа
- 🎯 **Цель этапа:** писать backend-приложение без фреймворка: база данных, REST API, авторизация, тесты, Docker, CI

### 📝 Что будет изучено

#### 🗄️ Базы данных

- Реляционная модель, нормализация, проектирование схемы
- SQL: выборки, соединения, группировки, подзапросы, оконные функции
- Индексы, `EXPLAIN`, транзакции, уровни изоляции
- PDO, Repository, миграции

#### 🧪 Тестирование

- PHPUnit: data providers, моки и стабы
- Unit и интеграционные тесты, TDD
- Покрытие, мутационное тестирование

#### 🌐 API

- REST, JSON, коды ответов, версионирование
- PSR-7, PSR-15, PSR-11, middleware, контейнер зависимостей
- Авторизация по токенам, JWT
- Документация OpenAPI

#### 🚀 Инфраструктура

- Docker и Docker Compose
- Nginx и PHP-FPM
- Redis, кеширование, очереди
- Логирование, профилирование, CI в GitHub Actions

#### 🧠 Алгоритмы

- Графы: BFS, DFS, топологическая сортировка, Дейкстра
- Куча, интервалы
- Динамическое программирование

---

## 🛠️ Что нужно до старта

- ✅ Stage 1: ООП, исключения, Composer, PHPUnit
- ✅ Решено не меньше 40 задач Easy на LeetCode или Codewars 6 kyu
- 🐳 Установлен [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- 🗄️ Клиент баз данных: [DBeaver](https://dbeaver.io/), TablePlus или встроенный в PhpStorm

---

## 🧮 Баллы этапа

| Неделя | Задание | Баллы | Проверка |
| --- | --- | --- | --- |
| 13 | SQL Library | 100 | ментор |
| 14 | Library on PDO | 100 | ментор |
| 15 | TDD Kata | 100 | ментор |
| 16 | graphs | 100 | автотесты |
| 17–18 | Task Manager API | 250 | ментор |
| 19 | Task Manager API: Performance | 100 | ментор |
| 20 | Mock Interview | 100 | ментор |
| — | Тесты (9 × 10) | 90 | самопроверка |
| — | Алгоритмы | 400 | LeetCode |
| | **Итого** | **1340** | |

**Порог перехода в Stage 3:** 900 баллов, сданы Task Manager API и Mock Interview.

---

## ⚙️ Подготовка окружения

Базовый `docker-compose.yml` для всех заданий этапа:

```yaml
services:
  php:
    image: php:8.3-fpm
    volumes:
      - ./:/var/www/html
    depends_on:
      - db

  nginx:
    image: nginx:alpine
    ports:
      - "8080:80"
    volumes:
      - ./:/var/www/html
      - ./docker/nginx.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - php

  db:
    image: postgres:16
    environment:
      POSTGRES_DB: app
      POSTGRES_USER: app
      POSTGRES_PASSWORD: secret
    ports:
      - "5432:5432"
    volumes:
      - db-data:/var/lib/postgresql/data

volumes:
  db-data:
```

Можно использовать MySQL 8 вместо PostgreSQL. Выбранную СУБД нужно указать в README задания.

---

## Training Program

### Week #13. SQL

#### 26 апреля 2027 — дедлайн 2 мая 2027

- Modules:
  - **Реляционная модель**
    - Таблица, строка, столбец, типы данных
    - Первичный ключ, внешний ключ, суррогатный и естественный ключ
    - Связи: один к одному, один ко многим, многие ко многим
    - Нормальные формы: 1НФ, 2НФ, 3НФ, когда оправдана денормализация
    - ER-диаграммы: [dbdiagram.io](https://dbdiagram.io/) или [drawSQL](https://drawsql.app/)
  - **DDL**: `CREATE TABLE`, `ALTER TABLE`, ограничения `NOT NULL`, `UNIQUE`, `CHECK`, `FOREIGN KEY`, `ON DELETE`
  - **DML**: `INSERT`, `UPDATE`, `DELETE`, `UPSERT`
  - **Выборки**
    - `SELECT`, `WHERE`, `ORDER BY`, `LIMIT`, `OFFSET`
    - `INNER`, `LEFT`, `RIGHT`, `FULL JOIN`, соединение таблицы с собой
    - `GROUP BY`, агрегатные функции, `HAVING`
    - Подзапросы, `EXISTS`, `IN`, CTE (`WITH`)
    - Оконные функции: `ROW_NUMBER`, `RANK`, `SUM() OVER`, `LAG`
    - `NULL` в сравнениях и агрегатах
  - **Индексы**
    - B-tree, составные индексы, порядок столбцов
    - Когда индекс не используется
    - `EXPLAIN` и `EXPLAIN ANALYZE`
  - Материал: [SQL Academy](https://sql-academy.org/ru), [PostgreSQL Tutorial](https://www.postgresqltutorial.com/), [Use The Index, Luke](https://use-the-index-luke.com/ru)

- Tasks:
  - [SQL Library](#sql-library) — 100

- Tests:
  - [St2] SQL Basics — 10
  - [St2] Indexes & Normalization — 10

- Algorithms:
  - [Combine Two Tables](https://leetcode.com/problems/combine-two-tables/) — 5
  - [Duplicate Emails](https://leetcode.com/problems/duplicate-emails/) — 5
  - [Second Highest Salary](https://leetcode.com/problems/second-highest-salary/) — 10
  - [Rank Scores](https://leetcode.com/problems/rank-scores/) — 15
  - [Department Top Three Salaries](https://leetcode.com/problems/department-top-three-salaries/) — 20

### Week #14. PDO и работа с базой из PHP

#### 3 мая 2027 — дедлайн 9 мая 2027

- Modules:
  - **PDO** — [php.net](https://www.php.net/manual/ru/book.pdo.php)
    - DSN, подключение, `PDO::ERRMODE_EXCEPTION`
    - `query`, `prepare`, `execute`, именованные и позиционные параметры
    - `fetch`, `fetchAll`, режимы выборки, `FETCH_CLASS`
    - `lastInsertId`
  - **SQL-инъекции**: как появляются, почему подготовленные запросы защищают, что нельзя передать параметром (имена столбцов, `ORDER BY`)
  - **Транзакции**
    - ACID
    - `beginTransaction`, `commit`, `rollBack`
    - Уровни изоляции, грязное чтение, неповторяющееся чтение, фантомы
    - Блокировки `SELECT ... FOR UPDATE`, взаимоблокировки
  - **Работа с данными в коде**
    - Active Record, Data Mapper, Repository
    - Проблема N+1 запросов
    - Гидрация объектов из строк
  - **Миграции**: зачем нужны, версии схемы, откат. Обзор [Phinx](https://phinx.org/) и [Doctrine Migrations](https://www.doctrine-project.org/projects/migrations.html)
  - **Конфигурация**: переменные окружения, файл `.env`, почему секреты не коммитят

- Tasks:
  - [Library on PDO](#library-on-pdo) — 100

- Tests:
  - [St2] PDO & Transactions — 10

- Algorithms:
  - [Kth Largest Element in an Array](https://leetcode.com/problems/kth-largest-element-in-an-array/) — 15
  - [Merge Intervals](https://leetcode.com/problems/merge-intervals/) — 15
  - [Insert Interval](https://leetcode.com/problems/insert-interval/) — 15

### Week #15. Тестирование

#### 10 мая 2027 — дедлайн 16 мая 2027

- Modules:
  - **PHPUnit** — [docs.phpunit.de](https://docs.phpunit.de/)
    - Структура теста: Arrange, Act, Assert
    - `setUp`, `tearDown`, data providers, атрибуты `#[Test]`, `#[DataProvider]`
    - Проверка исключений
  - **Тестовые двойники**: dummy, stub, spy, mock, fake. Когда мок — признак плохого дизайна
  - **Виды тестов**
    - Пирамида тестирования
    - Unit-тесты
    - Интеграционные тесты с базой: транзакция на тест, тестовая база
    - Функциональные тесты HTTP
  - **TDD**: цикл red-green-refactor, ката, маленькие шаги
  - **Качество тестов**
    - Покрытие кода: Xdebug или PCOV, отчёт HTML
    - Мутационное тестирование: [Infection](https://infection.github.io/)
  - Обзор [Pest](https://pestphp.com/) как альтернативы PHPUnit

- Tasks:
  - [TDD Kata](#tdd-kata) — 100

- Tests:
  - [St2] Testing — 10

- Algorithms:
  - [Number of Islands](https://leetcode.com/problems/number-of-islands/) — 20
  - [Flood Fill](https://leetcode.com/problems/flood-fill/) — 10
  - [Max Area of Island](https://leetcode.com/problems/max-area-of-island/) — 15

### Week #16. Графы

#### 17 мая 2027 — дедлайн 23 мая 2027

- Modules:
  - **Графы**
    - Вершины, рёбра, ориентированные и неориентированные, взвешенные
    - Представление: список смежности, матрица смежности, список рёбер
  - **Обходы**
    - Поиск в ширину (BFS): кратчайший путь в невзвешенном графе
    - Поиск в глубину (DFS): компоненты связности, поиск циклов
    - Обход сетки (матрицы) как графа
  - **Алгоритмы на графах**
    - Топологическая сортировка: алгоритм Кана, DFS
    - Алгоритм Дейкстры с кучей `SplPriorityQueue`
    - Система непересекающихся множеств (Union-Find)
  - **Где графы встречаются в backend**: зависимости пакетов Composer, маршруты, рекомендации, права доступа
  - Материал: Бхаргава «Грокаем алгоритмы», гл. 6–7; [VisuAlgo: Graph Traversal](https://visualgo.net/en/dfsbfs)

- Tasks:
  - [graphs](#graphs) — 100

- Tests:
  - [St2] Graphs — 10

- Algorithms:
  - [Course Schedule](https://leetcode.com/problems/course-schedule/) — 20
  - [Rotting Oranges](https://leetcode.com/problems/rotting-oranges/) — 20
  - [Clone Graph](https://leetcode.com/problems/clone-graph/) — 15
  - [Network Delay Time](https://leetcode.com/problems/network-delay-time/) — 20

### Week #17–18. REST API без фреймворка

#### 24 мая 2027 — дедлайн 6 июня 2027

- Modules:
  - **REST**
    - Ресурсы и URL: `/projects/{id}/tasks`
    - Методы и коды ответов: 200, 201, 204, 400, 401, 403, 404, 409, 422, 500
    - Пагинация, фильтры, сортировка в query-параметрах
    - Версионирование API
    - Единый формат ошибок: [RFC 9457 Problem Details](https://www.rfc-editor.org/rfc/rfc9457)
  - **Стандарты PHP-FIG**
    - [PSR-7](https://www.php-fig.org/psr/psr-7/): объекты запроса и ответа
    - [PSR-15](https://www.php-fig.org/psr/psr-15/): обработчики и middleware
    - [PSR-11](https://www.php-fig.org/psr/psr-11/): контейнер зависимостей
    - Библиотеки: [nyholm/psr7](https://github.com/Nyholm/psr7), [league/route](https://route.thephpleague.com/), [PHP-DI](https://php-di.org/)
  - **Архитектура приложения**
    - Слои: контроллер, сервис, репозиторий
    - DTO для входных данных, валидация
    - Внедрение зависимостей через контейнер
  - **Авторизация**
    - Аутентификация и авторизация — в чём разница
    - Токены в заголовке `Authorization: Bearer`
    - JWT: структура, подпись, срок жизни, refresh-токены
    - Проверка прав доступа к ресурсу
  - **Документация API**: [OpenAPI 3](https://swagger.io/specification/), Swagger UI
  - **CORS**: зачем нужен, заголовки

- Tasks:
  - [Task Manager API](#task-manager-api) — 250

- Tests:
  - [St2] REST & HTTP API — 10
  - [St2] Auth & JWT — 10

- Algorithms:
  - [Coin Change](https://leetcode.com/problems/coin-change/) — 20
  - [House Robber](https://leetcode.com/problems/house-robber/) — 15
  - [Longest Increasing Subsequence](https://leetcode.com/problems/longest-increasing-subsequence/) — 20
  - [Decode Ways](https://leetcode.com/problems/decode-ways/) — 20

### Week #19. Производительность и инфраструктура

#### 7 июня 2027 — дедлайн 13 июня 2027

- Modules:
  - **Веб-сервер**: Nginx, PHP-FPM, пул процессов, OPcache
  - **Кеширование**
    - Что кешировать, время жизни, инвалидация
    - [Redis](https://redis.io/docs/): строки, хеши, списки, TTL
    - [PSR-6](https://www.php-fig.org/psr/psr-6/) и [PSR-16](https://www.php-fig.org/psr/psr-16/)
  - **Очереди**
    - Зачем нужны фоновые задачи: письма, отчёты, обработка файлов
    - Очередь на Redis, воркер, повторы и ошибки
  - **Логирование и наблюдаемость**
    - [PSR-3](https://www.php-fig.org/psr/psr-3/), [Monolog](https://github.com/Seldaek/monolog)
    - Уровни логов, контекст, request id
  - **Профилирование**: Xdebug profiler, поиск медленных запросов к базе
  - **CI**: [GitHub Actions](https://docs.github.com/ru/actions), запуск тестов, PHPStan и PHP-CS-Fixer на каждый Pull Request

- Tasks:
  - [Task Manager API: Performance](#task-manager-api-performance) — 100

- Tests:
  - [St2] Caching, Queues & Infrastructure — 10

- Algorithms:
  - [Word Break](https://leetcode.com/problems/word-break/) — 20
  - [Unique Paths](https://leetcode.com/problems/unique-paths/) — 15
  - [Longest Common Subsequence](https://leetcode.com/problems/longest-common-subsequence/) — 20

### Week #20. Собеседование

#### 14 июня 2027 — дедлайн 20 июня 2027

- Modules:
  - Повторение тем Stage 1 и Stage 2 по вопросам для самопроверки
  - Разбор своего Task Manager API: архитектура, решения, что можно улучшить
  - Обзор System Design на уровне Junior: как устроен типичный веб-сервис

- Tasks:
  - [Mock Interview](#mock-interview) — 100

- Tests:
  - [St2] Final test Stage 2 — 10

- Algorithms:
  - 5 задач Medium из [NeetCode 150](https://neetcode.io/practice), которые ещё не решены — по 10

---

## 📋 Tasks

### SQL Library

Папка `stage2/sql-library/`.

**Задача:** спроектировать базу данных библиотеки и написать запросы.

Сущности: книги, авторы (у книги может быть несколько авторов), жанры, экземпляры книг, читатели, выдачи (дата выдачи, срок возврата, дата возврата).

**Что сдать:**

- `schema.sql` — создание таблиц
- `seed.sql` — тестовые данные: не меньше 50 книг, 20 читателей, 200 выдач
- `queries.sql` — 15 запросов с комментарием, что делает каждый
- ER-диаграмма картинкой в README

**Запросы:**

1. Книги, которые сейчас на руках
2. Читатели-должники с количеством дней просрочки
3. Топ-10 книг по числу выдач за последний год
4. Авторы, книги которых ни разу не брали
5. Жанры с числом книг и средним числом выдач на книгу
6. Читатели, которые брали книги всех жанров
7. Самая популярная книга в каждом жанре (оконные функции)
8. Количество выдач по месяцам за год
9. Читатели, которые брали одну и ту же книгу больше одного раза
10. Средний срок чтения книги по жанрам
11. Книги, у которых все экземпляры сейчас выданы
12. Рейтинг читателей по числу прочитанных книг с местом в рейтинге
13. Для каждого читателя — дата последней выдачи и название книги
14. Нарастающий итог выдач по дням за месяц
15. Пары авторов, которые писали книги вместе

**Критерии — 100 баллов:**

- +30 — схема в 3НФ, внешние ключи и ограничения
- +60 — по 4 балла за каждый правильный запрос
- +10 — индексы для запросов 2, 3 и 7 с выводом `EXPLAIN` до и после

### Library on PDO

Папка `stage2/library-pdo/`.

**Задача:** PHP-приложение поверх базы из SQL Library. Интерфейс — консольные команды или простые HTML-страницы.

- Каталог с поиском по названию и автору
- Выдача книги читателю
- Возврат книги
- Список должников

**Критерии — 100 баллов:**

- +30 — только подготовленные запросы, нет конкатенации SQL с данными пользователя
- +20 — Repository для каждой сущности, SQL только в репозиториях
- +20 — выдача книги в транзакции с блокировкой экземпляра: два одновременных запроса не выдают один экземпляр дважды
- +20 — миграции и сиды запускаются командами
- +10 — запуск одной командой `docker compose up`, настройки через `.env`

### TDD Kata

Папка `stage2/tdd-kata/`.

**Задача:** решить три каты по TDD. Каждый шаг red, green и refactor — отдельный коммит с префиксом `test:`, `feat:` или `refactor:`.

1. [String Calculator](https://osherove.com/tdd-kata-1/)
2. Bowling Game — подсчёт очков в боулинге
3. Roman Numerals — перевод в обе стороны

**Критерии — 100 баллов:**

- +60 — по 20 за каждую решённую кату
- +20 — история коммитов показывает цикл TDD
- +20 — покрытие не ниже 90%, мутационный индекс Infection не ниже 80%

### graphs

Папка `stage2/graphs/`, тесты PHPUnit.

**Критерии — 100 баллов:**

- +30 — класс `Graph` (ориентированный и неориентированный, веса), методы `bfs`, `dfs`, `hasPath`, `hasCycle`
- +30 — `MazeSolver`: читает лабиринт из текстового файла (`#` — стена, `S` — старт, `E` — выход), находит кратчайший путь и выводит лабиринт с отмеченным путём
- +25 — `Dijkstra`: кратчайший маршрут между городами, карта загружается из JSON
- +15 — `DependencyResolver`: по списку пакетов и их зависимостей выдаёт порядок установки или ошибку о циклической зависимости

### Task Manager API

Папка `stage2/task-manager-api/`. Разрешены библиотеки PSR-7, роутер, контейнер, валидатор, JWT. Фреймворки Laravel и Symfony запрещены.

**Сущности:** пользователь, проект, участник проекта (роль владелец или участник), задача (название, описание, статус, приоритет, исполнитель, срок), комментарий.

**Эндпоинты:**

```text
POST   /api/v1/auth/register
POST   /api/v1/auth/login
POST   /api/v1/auth/refresh

GET    /api/v1/projects
POST   /api/v1/projects
GET    /api/v1/projects/{id}
PATCH  /api/v1/projects/{id}
DELETE /api/v1/projects/{id}
POST   /api/v1/projects/{id}/members

GET    /api/v1/projects/{id}/tasks?status=open&assignee=5&sort=-due_date&page=2
POST   /api/v1/projects/{id}/tasks
GET    /api/v1/tasks/{id}
PATCH  /api/v1/tasks/{id}
DELETE /api/v1/tasks/{id}

GET    /api/v1/tasks/{id}/comments
POST   /api/v1/tasks/{id}/comments
```

**Критерии — 250 баллов:**

- +40 — CRUD всех ресурсов с правильными методами и кодами ответов
- +30 — регистрация, вход, access- и refresh-токены
- +30 — права доступа: чужие проекты недоступны, удалить проект может только владелец
- +30 — фильтры, сортировка, пагинация с метаданными (`total`, `page`, `per_page`)
- +30 — валидация и единый формат ошибок
- +40 — интеграционные тесты на все эндпоинты
- +30 — документация OpenAPI и Swagger UI
- +20 — Docker Compose, миграции, запуск одной командой

### Task Manager API: Performance

Продолжение Task Manager API.

**Критерии — 100 баллов:**

- +30 — кеш списка проектов пользователя в Redis, сброс кеша при изменениях
- +30 — уведомление исполнителю о назначении задачи через очередь и отдельный воркер (письмо можно записывать в лог)
- +20 — логирование через Monolog с request id в каждой записи
- +20 — GitHub Actions: тесты, PHPStan уровня 6, PHP-CS-Fixer на каждый Pull Request

### Mock Interview

Собеседование с ментором 60–90 минут.

**Критерии — 100 баллов:**

- +30 — теория PHP и ООП
- +20 — базы данных и SQL
- +20 — HTTP, REST, безопасность
- +20 — алгоритмическая задача уровня Easy или Medium: решение, оценка сложности
- +10 — рассказ о своём проекте

---

## ✅ Вопросы для самопроверки

### Базы данных

1. Что такое нормализация? Чем 2НФ отличается от 3НФ?
2. Чем `INNER JOIN` отличается от `LEFT JOIN`?
3. Чем `WHERE` отличается от `HAVING`?
4. Как работает B-tree индекс? Почему порядок столбцов в составном индексе важен?
5. Когда индекс не поможет?
6. Что означает каждая буква в ACID?
7. Какие уровни изоляции транзакций существуют и от каких аномалий они защищают?
8. Что такое проблема N+1 и как её решить?
9. Почему подготовленные запросы защищают от SQL-инъекций?

### Тестирование

1. Чем мок отличается от стаба?
2. Чем unit-тест отличается от интеграционного?
3. Что такое TDD? Какие у него плюсы и минусы?
4. Что показывает покрытие кода и чего оно не показывает?
5. Что такое мутационное тестирование?

### Графы

1. Какие способы представления графа вы знаете? Когда какой лучше?
2. Чем BFS отличается от DFS? Какой из них находит кратчайший путь в невзвешенном графе?
3. Как найти цикл в ориентированном графе?
4. Почему алгоритм Дейкстры не работает с отрицательными весами?

### API и безопасность

1. Что такое REST? Какие у него принципы?
2. Чем `PUT` отличается от `PATCH`?
3. Когда возвращать 401, а когда 403? Когда 400, а когда 422?
4. Что такое middleware?
5. Из чего состоит JWT? Можно ли хранить в нём пароль?
6. Зачем нужен refresh-токен?
7. Что такое CORS?
8. Что такое контейнер внедрения зависимостей?

### Инфраструктура

1. Как PHP-FPM обрабатывает запросы?
2. Что делает OPcache?
3. Какие стратегии инвалидации кеша вы знаете?
4. Зачем нужны очереди? Что делать, если задача в очереди упала?
5. Почему секреты не хранят в репозитории?

---

## ❓ FAQ

### PostgreSQL или MySQL?

Любая. PostgreSQL рекомендуется: в нём строже типы и удобнее оконные функции и `EXPLAIN ANALYZE`. Запросы на LeetCode пишутся на MySQL.

### Почему API без фреймворка?

Чтобы понимать, что фреймворк делает за вас: роутинг, middleware, контейнер, валидацию, работу с базой. В Stage 3 этот же API переносится на Laravel или Symfony.

### Как связаться с ментором?

Ментор назначается в первую неделю этапа. Вопросы — в личном чате, ревью — в комментариях Pull Request. Срок ответа ментора — до 48 часов.

### Что дальше?

После набора порога — [Stage 3. Framework & Final Project](../README.md#stage-3-framework--final-project).
