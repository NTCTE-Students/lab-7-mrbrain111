<?php
session_start();

if(isset($_SESSION['loggedin'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка куки 'loggedin'</title>
</head>
<body>
    <?php
    echo "Вам нужно войти в систему.";
    ?>
</body>
</html>