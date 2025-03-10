<?php
session_start();

if(!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
}

$_SESSION['last_visit_time'] = time();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Время первого и последнего визитов</title>
</head>
<body>
    <?php
    echo "Первое посещение: " . date("d.m.Y H:i:s", $_SESSION['first_visit_time']) . "<br>";
    echo "Последнее посещение: " . date("d.m.Y H:i:s", $_SESSION['last_visit_time']);
    ?>
</body>
</html>