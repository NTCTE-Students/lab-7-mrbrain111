<?php
setcookie('user', 'admin', time() + 86400);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание куки 'user'</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['user'])) {
        echo "Куки 'user' установлена и имеет значение: " . $_COOKIE['user'];
    } else {
        echo "Куки 'user' не найдена.";
    }
    ?>
</body>
</html>