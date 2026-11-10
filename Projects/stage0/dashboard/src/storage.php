<?php

const EXPENSES_FILE = __DIR__ . '/../data/expenses.json';

function loadExpenses(): array
{
    if (!file_exists(EXPENSES_FILE)) {
        return [];
    }

    $data = json_decode(file_get_contents(EXPENSES_FILE), true);

    return is_array($data) ? $data : [];
}

function saveExpenses(array $expenses): void
{
    file_put_contents(
        EXPENSES_FILE,
        json_encode(array_values($expenses), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
        LOCK_EX
    );
}
