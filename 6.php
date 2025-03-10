<?php
setcookie('country', 'Russia', time() + 3600);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветствие на основе куки 'country'</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['country']) && $_COOKIE['country'] == 'Russia') {
        echo "Добро пожаловать на сайт!";
    } elseif(isset($_COOKIE['country'])) {
        echo "Welcome to our website!";
    } else {
        echo "Куки 'country' не найдена.";
    }
    ?>
</body>
</html>