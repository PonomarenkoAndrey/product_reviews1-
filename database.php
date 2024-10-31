<?php
// Налаштування підключення до бази даних
$host = 'localhost'; // Хост, зазвичай localhost
$db = 'product_reviews'; // Ім'я бази даних
$user = 'your_username'; // Ім'я користувача бази даних
$pass = 'your_password'; // Пароль користувача бази даних
$charset = 'utf8mb4'; // Кодування

// Створення DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Опції для PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Включити обробку помилок
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Формат вибірки за замовчуванням
    PDO::ATTR_EMULATE_PREPARES => false, // Деактивувати емуляцію підготовлених запитів
];

try {
    // Створення нового з'єднання з базою даних
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Обробка помилки підключення
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
