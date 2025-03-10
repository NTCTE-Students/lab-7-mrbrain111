<?php
unset($_COOKIE['session_id']);
setcookie('session_id', '', time() - 3600);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Удаление куки 'session_id'</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE['session_id'])) {
        echo "Куки 'session_id' успешно удалена.";
    } else {
        echo "Ошибка удаления куки 'session_id'.";
    }
    ?>
</body>
</html>