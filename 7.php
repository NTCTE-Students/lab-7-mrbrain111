<?php
if(isset($_POST['submit'])) {
    if($_POST['theme'] == 'light') {
        setcookie('theme', 'light', time() + 86400);
    } elseif($_POST['theme'] == 'dark') {
        setcookie('theme', 'dark', time() + 86400);
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Смена темы через форму</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['theme'])) {
        echo "Текущая тема: " . $_COOKIE['theme'];
    } else {
        echo "Куки 'theme' не найдена.";
    }
    ?>
    
    <form method="post">
        Выберите тему:<br>
        <input type="radio" name="theme" value="light">Светлая<br>
        <input type="radio" name="theme" value="dark">Темная<br><br>
        <input type="submit" name="submit" value="Применить">
    </form>
</body>
</html>