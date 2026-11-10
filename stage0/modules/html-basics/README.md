# [Stage#0.](../../README.md) Основы HTML

## В данном модуле студентам необходимо:

1. Понять структуру HTML-документа.
2. Освоить основные теги: заголовки, абзацы, списки, ссылки, изображения, таблицы.
3. Познакомиться с семантическими тегами.
4. Научиться делать формы — они понадобятся для PHP.
5. Проверять вёрстку валидатором.

## Приблизительное время прохождения модуля

Теория: 3 часа
Практика: 3 часа

## Теория

1. [MDN: Введение в HTML](https://developer.mozilla.org/ru/docs/Learn/HTML/Introduction_to_HTML) (2 часа)
2. [MDN: Ваша первая HTML-форма](https://developer.mozilla.org/ru/docs/Learn/Forms/Your_first_form) (0.5 часа)
3. [MDN: Таблицы](https://developer.mozilla.org/ru/docs/Learn/HTML/Tables/Basics) (0.5 часа)

### Структура документа

```html
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Иван Иванов — CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>...</header>
    <main>...</main>
    <footer>...</footer>
</body>
</html>
```

### Семантические теги

`header`, `nav`, `main`, `section`, `article`, `aside`, `footer`, `figure`, `figcaption`. Заголовок `h1` на странице один.

### Формы — главное для PHP

```html
<form action="order.php" method="post">
    <label for="name">Имя</label>
    <input type="text" id="name" name="name" required>

    <label for="size">Размер</label>
    <select id="size" name="size">
        <option value="s">S</option>
        <option value="m">M</option>
    </select>

    <button type="submit">Заказать</button>
</form>
```

- `action` — куда отправить данные.
- `method` — `get` (данные в адресной строке) или `post` (в теле запроса).
- `name` — ключ, под которым значение придёт в PHP: `$_POST['name']`.

## Практика

1. Пройти бесплатные курсы HTML на [HTML Academy](https://htmlacademy.ru/courses) (по желанию, если HTML совсем новый).
2. Начать вёрстку CV для задания [CV#2. HTML, CSS & Git Basics](../../tasks/cv/cv-2-html-css-git.md).
3. Проверить страницу [W3C Validator](https://validator.w3.org/).
4. Пройти тест [St0] HTML: ответить на вопросы ниже.

## Вопросы для самопроверки

1. Зачем нужен `<!DOCTYPE html>`?
2. Что пишут в `head`, а что в `body`?
3. Назовите 5 семантических тегов.
4. Чем атрибут `id` отличается от `name` у поля формы?
5. Чем `method="get"` отличается от `method="post"`?
6. Зачем у изображения атрибут `alt`?

## Дополнительные материалы

1. [MDN: Справочник HTML-элементов](https://developer.mozilla.org/ru/docs/Web/HTML/Element)
2. [doka.guide: HTML](https://doka.guide/html/)
