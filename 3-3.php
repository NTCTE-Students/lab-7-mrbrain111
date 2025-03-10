<?php
session_start();

if(isset($_GET['logout'])) {
    unset($_SESSION['username']);
    session_destroy();

    header("Location: 2.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница приветствия</title>
</head>
<body>
    <?php
    if(isset($_SESSION['username'])) {
        echo "Здравствуйте, " . $_SESSION['username'] . "! | ";
        echo "<a href='?logout'>Выйти</a>";
    } else {
        echo "Не удалось распознать пользователя.";
    }
    ?>
</body>
</html>