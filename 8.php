<?php
setcookie('font_size', '16px', time() + 86400);
setcookie('layout', 'grid', time() + 86400);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вывод всех установленных куки</title>
</head>
<body>
    <?php
    foreach ($_COOKIE as $name => $value) {
        echo "Куки '$name' имеет значение: $value.<br>";
    }
    ?>
</body>
</html>