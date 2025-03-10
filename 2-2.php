<?php
session_start();

if(isset($_POST['submit'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
</head>
<body>
    <h1>Авторизация</h1>
    <form method="post">
        Имя пользователя:<br>
        <input type="text" name="username"><br>
        Пароль:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Войти">
    </form>
</body>
</html>