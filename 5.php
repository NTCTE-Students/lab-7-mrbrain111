<?php
if(!isset($_COOKIE['visited'])) {
    setcookie('visited', 1, time() + 3600);
} else {
    $count = intval($_COOKIE['visited']);
    $count++;
    setcookie('visited', $count, time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Увеличение значений куки 'visited'</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['visited'])) {
        echo "Вы посетили эту страницу " . $_COOKIE['visited'] . " раз(а).";
    } else {
        echo "Куки 'visited' не найдена.";
    }
    ?>
</body>
</html>