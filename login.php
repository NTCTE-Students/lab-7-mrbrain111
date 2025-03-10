<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
    <h1>Вход в систему</h1>
    <form action="" method="post">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <button type="submit" name="submit">Войти</button>
    </form>
</body>
</html>