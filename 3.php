<?php
setcookie('preferences', 'dark_mode', time() + 604800);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Установка куки 'preferences'</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['preferences'])) {
        echo "Куки 'preferences' установлена и имеет значение: " . $_COOKIE['preferences'];
    } else {
        echo "Куки 'preferences' не найдена.";
    }
    ?>
</body>
</html>