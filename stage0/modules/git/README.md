# [Stage#0.](../../README.md) Знакомство с системой контроля версий Git и веб-сервисом GitHub

## В данном модуле студентам необходимо:

1. Получить общее представление о системе контроля версий Git.
2. Начать работу с Git на примере веб-сервиса GitHub.
3. Познакомиться с терминологией:
   - Repository: Local, Remote/Origin
   - Working Directory
   - Staging Area
   - Commit, Branch, Pull Request
4. Познакомиться с основными командами: `clone`, `add`, `commit`, `push`, `pull`.
5. Познакомиться с понятием «ветка»: создание, слияние, конфликты.
6. Познакомиться с Markdown, оформить страницу.
7. Выучить правила оформления коммитов.

## Приблизительное время прохождения модуля

Теория: 3 часа
Практика: 4 часа

## Теория

1. [Pro Git (RU)](https://git-scm.com/book/ru/v2), главы 1, 2 и 3.1–3.2 (2 часа)
2. [GitHub Docs: Начало работы с Git](https://docs.github.com/ru/get-started/getting-started-with-git) — установка и настройка имени и email (0.5 часа)
3. [Документация Markdown на GitHub](https://docs.github.com/ru/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax) — коротко посмотреть синтаксис, глубже — на практике (0.5 часа)
4. Прочитать и запомнить раздел «Требования к коммитам» ниже

### Основные понятия

- **Working Directory** — файлы проекта, с которыми вы работаете.
- **Staging Area** — изменения, подготовленные к коммиту (`git add`).
- **Commit** — сохранённый снимок изменений с сообщением.
- **Local Repository** — история коммитов на вашем компьютере.
- **Remote / Origin** — репозиторий на GitHub.
- **Branch** — отдельная линия разработки.
- **Pull Request** — запрос на слияние ветки, место для ревью кода.

### Основные команды

```bash
git config --global user.name "Иван Иванов"
git config --global user.email "ivan@example.com"

git clone https://github.com/username/mentor-php.git
git status
git add stage0/cv.md
git commit -m "docs: add contacts to cv"
git push origin cv

git switch -c cv          # создать ветку и перейти в неё
git switch main           # перейти в ветку main
git merge cv              # влить ветку cv в текущую
git pull                  # забрать изменения с GitHub
git log --oneline         # история коммитов
```

### Требования к коммитам

Сообщение коммита пишется по [Conventional Commits](https://www.conventionalcommits.org/ru/): `тип: описание`.

| Тип | Когда использовать |
| --- | --- |
| `init` | начало проекта |
| `feat` | новая функциональность |
| `fix` | исправление ошибки |
| `refactor` | изменение кода без изменения поведения |
| `docs` | документация, README |
| `style` | форматирование |
| `test` | тесты |
| `chore` | настройка, зависимости |

Примеры: `feat: add order form`, `fix: validate empty phone`, `docs: add launch instructions`.

Описание — с маленькой буквы, без точки в конце, в повелительном наклонении на английском.

## Практика

1. Пройти уровни «Введение» в тренажёре [Learn Git Branching](https://learngitbranching.js.org/?locale=ru_RU).
2. Выполнить задание [CV#1. Markdown & Git](../../tasks/cv/cv-1-markdown-git.md).
3. Пройти тест [St0] Git: ответить на вопросы ниже.

## Вопросы для самопроверки

1. Чем `git add` отличается от `git commit`?
2. Что такое Staging Area?
3. Чем локальный репозиторий отличается от удалённого?
4. Как создать ветку и переключиться на неё?
5. Чем `git pull` отличается от `git fetch`?
6. Что такое конфликт слияния и как его разрешить?
7. Зачем нужен Pull Request?
8. Как правильно оформить коммит, который добавляет форму заказа?

## Дополнительные материалы

1. Тренажёр [githowto.com](https://githowto.com/ru)
2. [Инструкция по добавлению SSH-ключа в GitHub](https://docs.github.com/ru/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)
3. [Git Tutorial (EN)](https://www.w3schools.com/git/)
4. [Atlassian: Git Tutorials (EN)](https://www.atlassian.com/git/tutorials)
