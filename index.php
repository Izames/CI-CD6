<?php
echo "Hello, Bitrix environment!";

// Подключение к MySQL
$mysqli = new mysqli(getenv('MYSQL_HOST', true) ?: 'mysql', getenv('MYSQL_USER', true) ?: 'user', getenv('MYSQL_PASSWORD', true) ?: 'password', getenv('MYSQL_DATABASE', true) ?: 'database');

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
echo "Connected to MySQL successfully!";

// Проверка Redis
$redis = new Redis();
if ($redis->connect('redis', 6379)) {
    echo "Connected to Redis successfully!";
} else {
    echo "Failed to connect to Redis.";
} 
?>
