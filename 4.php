<?php
setcookie('language', 'English', time() + 7200);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Установка куки 'language'</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['language'])) {
        echo "Куки 'language' установлена и имеет значение: " . $_COOKIE['language'];
    } else {
        echo "Куки 'language' не найдена.";
    }
    ?>
</body>
</html>