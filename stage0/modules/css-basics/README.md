# [Stage#0.](../../README.md) Основы CSS

## В данном модуле студентам необходимо:

1. Научиться подключать стили и писать селекторы.
2. Понять блочную модель.
3. Освоить базовый Flexbox.
4. Сделать страницу, которая не ломается на узком экране.

## Приблизительное время прохождения модуля

Теория: 3 часа
Практика: 4 часа

## Теория

1. [MDN: Первые шаги в CSS](https://developer.mozilla.org/ru/docs/Learn/CSS/First_steps) (1 час)
2. [MDN: Блочная модель](https://developer.mozilla.org/ru/docs/Learn/CSS/Building_blocks/The_box_model) (0.5 часа)
3. [MDN: Flexbox](https://developer.mozilla.org/ru/docs/Learn/CSS/CSS_layout/Flexbox) (1 час)
4. [MDN: Медиазапросы](https://developer.mozilla.org/ru/docs/Learn/CSS/CSS_layout/Media_queries) (0.5 часа)

### Главное

- Селекторы: тег `p`, класс `.card`, id `#header`, вложенность `.menu a`, состояние `a:hover`.
- Специфичность: id важнее класса, класс важнее тега.
- Блочная модель: `content` + `padding` + `border` + `margin`. Используйте `box-sizing: border-box`.
- Центрирование контента:

```css
.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 16px;
}
```

- Flexbox:

```css
.cards {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
}
```

- Адаптивность:

```css
@media (max-width: 600px) {
    .cards {
        flex-direction: column;
    }
}
```

## Практика

1. Пройти уровни игры [Flexbox Froggy](https://flexboxfroggy.com/#ru).
2. Сверстать стили CV для задания [CV#2. HTML, CSS & Git Basics](../../tasks/cv/cv-2-html-css-git.md).
3. Проверить CV на ширине 320px в режиме устройства в DevTools (`Ctrl+Shift+M`).
4. Пройти тест [St0] CSS: ответить на вопросы ниже.

## Вопросы для самопроверки

1. Какие способы подключить CSS вы знаете?
2. Что такое специфичность?
3. Из чего состоит блочная модель? Что делает `box-sizing: border-box`?
4. Как отцентрировать блок по горизонтали?
5. Что делают `justify-content` и `align-items`?
6. Как сделать, чтобы на узком экране карточки шли в одну колонку?

## Дополнительные материалы

1. [doka.guide: CSS](https://doka.guide/css/)
2. [CSS-Tricks: A Complete Guide to Flexbox (EN)](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
