<?php
global $connect;
require_once '../config/connect.php';

// Получение данных из формы
$name = $_POST['name'];
$phone = $_POST['phone'];
$table_number = $_POST['table_number'];
$seat_count = $_POST['seat_count'];

// Проверка доступности стола
$query = "SELECT * FROM `zakal_st` WHERE `number_stolik` = '$table_number'";
$result = mysqli_query($connect, $query);

// Если стол свободен, добавляем заказ
if (mysqli_num_rows($result) == 0) {
    // Добавление заказа в базу данных
    $query_insert = "INSERT INTO `zakal_st` (`id`, `name`, `number_tell`, `number_stolik`, `miqdor_stolik`)
              VALUES (NULL, '$name', '$phone', '$table_number', '$seat_count')";
    mysqli_query($connect, $query_insert);

    // Перенаправление на страницу checkout.php
    header('Location: checkout.php');
    exit();
} else {
    // Если стол занят, выполните соответствующие действия, например, выведите сообщение об ошибке или перенаправьте на другую страницу
    echo "Извините, этот стол уже занят. Пожалуйста, выберите другой.";
}
?>
