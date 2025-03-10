<?php
setcookie('user', 'guest', time() + 86400);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Изменение куки 'user'</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['user']) && $_COOKIE['user'] == 'guest') {
        echo "Значение куки 'user' успешно изменено на 'guest'.";
    } else {
        echo "Ошибка изменения куки 'user'.";
    }
    ?>
</body>
</html>