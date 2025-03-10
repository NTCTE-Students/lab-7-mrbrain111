<?php
session_start();

if(isset($_POST['add_to_cart'])) {
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = $_POST['product_name'];
}

if(isset($_POST['remove_from_cart'])) {
    if(isset($_SESSION['cart'])) {
        $key = array_search($_POST['product_name'], $_SESSION['cart']);
        if($key !== false) {
            unset($_SESSION['cart'][$key]);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Корзина товаров</title>
</head>
<body>
    <h1>Добавление и удаление товаров из корзины</h1>
    <form method="post">
        Название товара:<br>
        <input type="text" name="product_name"><br><br>
        <input type="submit" name="add_to_cart" value="Добавить в корзину">
        <input type="submit" name="remove_from_cart" value="Удалить из корзины">
    </form>
    <hr>
    <h2>Содержание корзины:</h2>
    <?php
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $item) {
            echo "$item<br>";
        }
    } else {
        echo "Корзина пуста.";
    }
    ?>
</body>
</html>