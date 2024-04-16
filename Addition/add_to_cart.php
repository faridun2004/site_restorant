<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка, было ли создано сессионное хранилище для корзины
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    // Добавление блюда в корзину
    $dish_id = $_POST['dish_id'];
    $quantity = $_POST['quantity'];
    // Проверка наличия блюда в корзине
    if (array_key_exists($dish_id, $_SESSION['cart'])) {
        $_SESSION['cart'][$dish_id] += $quantity; // Увеличение количества блюда
    } else {
        $_SESSION['cart'][$dish_id] = $quantity; // Добавление нового блюда
    }
    // Перенаправление обратно на страницу меню
    header("Location: menu.php");
    exit;
} else {
    // Если запрос не был методом POST, перенаправляем на страницу меню
    header("Location: menu.php");
    exit;
}
?>