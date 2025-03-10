<?php
session_start();

$_SESSION['username'] = 'student';

echo "Переменная сессии 'username' установлена и имеет значение: " . $_SESSION['username'];
?>