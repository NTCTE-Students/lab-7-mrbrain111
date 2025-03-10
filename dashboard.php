<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель управления</title>
</head>
<body>
    <h1>Добро пожаловать в панель управления!</h1>
    <p>Здесь вы можете управлять своими данными.</p>
    <a href="logout.php">Выйти</a>
</body>
</html>