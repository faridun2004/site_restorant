<?php
global $connect;
require_once '../config/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем наличие данных в $_POST
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])) {
        // Получаем данные из $_POST
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // Подготовленный запрос
        $stmt = mysqli_prepare($connect, "INSERT INTO `registration_customer` (`id`, `name`, `email`, `phone`, `address`) VALUES (NULL, '$name', '$email', '$phone', '$address')");
        // Перенаправляем пользователя
        header('Location: checkout.php');
        exit;
    } else {
        echo "Не удалось получить данные из формы.";
    }
} else {
    echo "Данные были отправлены не методом POST.";
}
?>
