<?php
session_start();
global  $connect;
require_once '../config/connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['cancel_order'])) {
        unset($_SESSION['cart']); // Очистка корзины
        echo "<p>Фармоиш бекор карда шуд. Корзина холи карда шуд.</p>";
    }
    elseif(isset($_POST['place_order'])) {
        // Проверка, были ли выбраны блюда
        if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo "<p>Корзина холи аст. Фармоиш додан ғайриимкон!.</p>";
        } else {
            // Проверка соединения
            if ($connect->connect_error) {
                die("Connection failed: " . $connect->connect_error);
            }
            // Получение данных о пользователе (здесь предполагается, что у вас есть система аутентификации и пользователь уже авторизован)
            $user_id = 1;// Ваш код для получения ID пользователя
            // Вычисление общей стоимости заказа
            $total_price = 0;
            foreach ($_SESSION['cart'] as $dish_id => $quantity) {
                // Получение цены каждого блюда из базы данных и умножение на количество
                // Здесь предполагается, что у вас есть таблица "dishes" с колонками "id" и "price"
                $sql = "SELECT price FROM dishes WHERE id = $dish_id";
                $result = $connect->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $dish_price = $row['price'];
                    $total_price += $dish_price * $quantity;
                }
            }
            // Вставка данных о заказе в базу данных
            $sql = "INSERT INTO orders (user_id, total_price) VALUES ($user_id, $total_price)";
            if ($connect->query($sql) === TRUE) {
                $order_id = $connect->insert_id;
                // Вставка данных о блюдах в заказ в базу данных
                foreach ($_SESSION['cart'] as $dish_id => $quantity) {
                    $sql = "INSERT INTO order_items (order_id, dish_id, quantity) VALUES ($order_id, $dish_id, $quantity)";
                    $connect->query($sql);
                }
                // Очистка корзины после успешного оформления заказа
                unset($_SESSION['cart']);
                echo "<p>Фармоиш қабул шуд. Рақами фармоиш: $order_id.</p>";
                echo "<a href='../index.php'>Гузаштан ба саҳифаи асосӣ</a>";
            } else {
                echo "Хатоги дар фиристодани фармоиш: " . $connect->error;
            }
            $connect->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тасдиқи фармоиш</title>
    <style>
        body{
            background: beige;
            margin: 20vh 15vh;
            text-align: center;
            font-size: 40px;
        }
        .k1{
            padding: 2vh 5vh;
            font-size: 18px;
            background: #3d3df3;
            border: #3d3df3;
            color: white;
        }
        .k2{
            padding: 2vh 5vh;
            font-size: 18px;
            background: #ab142b;
            border: #3d3df3;
            color: white;
        }
    </style>
</head>
<body>
<h1 id="h1_h1"><a href="../index.php" style="float: left;color: white"><img src="../img/kn.png"></a>Меню ресторана</h1>
<div class="form">
<form action="" method="POST" >
    <button type="submit" name="place_order" class="k1">Тасдиқи фармоиш</button><br><br>
    <button type="submit" name="cancel_order" class="k2">Тозакунии фармоиш ё корзина</button>
</form>
</div>
</body>
</html>
