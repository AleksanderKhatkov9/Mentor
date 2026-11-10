# [Stage#0.](../../README.md) Формы и обработка запросов

## В данном модуле студентам необходимо:

1. Научиться получать данные формы в PHP через `$_GET` и `$_POST`.
2. Проверять данные на сервере и выводить ошибки.
3. Защищать вывод от XSS через `htmlspecialchars`.
4. Делать редирект после отправки формы.

## Приблизительное время прохождения модуля

Теория: 3 часа
Практика: 6 часов

## Теория

1. [php.net: Работа с формами](https://www.php.net/manual/ru/tutorial.forms.php) (0.5 часа)
2. [php.net: Переменные из внешних источников](https://www.php.net/manual/ru/language.variables.external.php) (0.5 часа)
3. [php.net: filter_var](https://www.php.net/manual/ru/function.filter-var.php) и [фильтры проверки](https://www.php.net/manual/ru/filter.filters.validate.php) (0.5 часа)
4. [php.net: htmlspecialchars](https://www.php.net/manual/ru/function.htmlspecialchars.php) (0.5 часа)
5. [PHP: The Right Way — Data Filtering](https://phptherightway.com/#data_filtering) (EN, 0.5 часа)

### Получение данных

```php
$category = $_GET['category'] ?? 'all';     // из адреса ?category=coffee
$method = $_SERVER['REQUEST_METHOD'];       // GET или POST

if ($method === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
}
```

`?? ''` — если поле не пришло, берём пустую строку, а не получаем предупреждение.

### Валидация

```php
$errors = [];

if ($name === '') {
    $errors['name'] = 'Введите имя';
} elseif (mb_strlen($name) > 50) {
    $errors['name'] = 'Не больше 50 символов';
}

if (!preg_match('/^\+?\d{10,12}$/', $phone)) {
    $errors['phone'] = 'Телефон в формате +79991234567';
}

if ($errors === []) {
    // сохранить заказ
}
```

Проверка в браузере (`required`) не заменяет проверку на сервере: запрос можно отправить в обход формы.

### Вывод ошибок и сохранение значений

```php
<input name="name" value="<?= htmlspecialchars($name ?? '') ?>">
<?php if (isset($errors['name'])): ?>
    <p class="error"><?= $errors['name'] ?></p>
<?php endif; ?>
```

### Защита от XSS

Если вывести то, что ввёл пользователь, как есть, он может вставить `<script>`. Всё, что пришло от пользователя, выводится через `htmlspecialchars`:

```php
echo htmlspecialchars($comment);   // <script> превратится в &lt;script&gt;
```

### Редирект после POST

```php
header('Location: /thanks.php?order=' . $orderId);
exit;
```

Без редиректа обновление страницы отправит форму повторно — и заказ создастся дважды.

## Практика

1. Сделать страницу с формой «Обратная связь»: имя, email, сообщение. Проверить все поля на сервере, вывести ошибки под полями, сохранить введённые значения.
2. Попробовать ввести в поле `<b>жирный</b>` и `<script>alert(1)</script>` — убедиться, что текст выводится как есть.
3. Выполнить задание [Coffee Shop#3. Форма заказа](../../tasks/coffee-shop/coffee-shop-3.md).
4. Пройти тест [St0] Формы: ответить на вопросы ниже.

## Вопросы для самопроверки

1. В какой массив попадут данные формы с `method="post"`? А параметры из адреса?
2. Зачем нужен оператор `??` при чтении `$_POST`?
3. Почему нельзя полагаться только на атрибут `required`?
4. Что такое XSS и как от него защититься?
5. Зачем делать редирект после отправки формы?
6. Почему после `header('Location: ...')` пишут `exit`?

## Дополнительные материалы

1. [OWASP: Cross Site Scripting (EN)](https://owasp.org/www-community/attacks/xss/)
