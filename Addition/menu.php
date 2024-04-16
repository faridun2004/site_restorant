<?php
session_start();
global  $connect;
require_once '../config/connect.php';

// Обработка добавления блюда в корзину
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $dish_id = $_POST['dish_id'];
    $quantity = $_POST['quantity'];

    // Проверка, было ли создано сессионное хранилище для корзины
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    // Добавление блюда в корзину
    if (array_key_exists($dish_id, $_SESSION['cart'])) {
        $_SESSION['cart'][$dish_id] += $quantity; // Увеличение количества блюда
    } else {
        $_SESSION['cart'][$dish_id] = $quantity; // Добавление нового блюда
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<style>
    body{
        background-image: url("../css/img/7997.jpg");
        background-repeat: repeat;
    }
    .dish{
        margin-top: 15vh;
        background: #a8a650;
        text-align: center;
        font-size: 25px;
    }
    #photo_dish{

        width: 200px;
        height: 170px;

    }
    #button_dish{
        font-size: 20px;
        margin-left: 30px;
    }
    #quantity{
        width: 60px;
        height: 35px;
        margin-left: 14px;
        font-size: 20px;
    }
    #h1_h1{
        margin-top: -1vh;
        position: fixed;
        color: #dbdae1;
        background: #0a0a0a;
        width: 100%;
        height: 10vh;
        grid-area: span;

    }
    .a{
        float: right ;
        margin-right: 30vh;
    }
</style>
<body>
<h1 id="h1_h1"><a href="../index.php" style="float: left;color: white"><img src="../img/icons8_undo.ico"></a>Меню ресторана
    <?php
    // Проверяем, есть ли что-то в корзине
    if (!empty($_SESSION['cart'])) {
       ?>
        <a href="../Addition/cart.php" class="a">
            <img src="../img/icon.ico">
        </a>
    <?php
    }
    ?>
</h1>
<div class="menu">
    <!-- Вывод блюд из базы данных -->
    <?php
    // Проверка соединения
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // Запрос к базе данных для получения списка блюд
    $sql = "SELECT * FROM dishes";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='dish' id='dizayn_dish'>";
            echo "<img id='photo_dish' src='" . $row['image'] . "' alt='Фото блюда'".$row['name']."'>";
            echo "<h2>" . $row["name"] . "</h2>";
            echo "<p>" . $row["description"] . "</p>";
            echo "<p>Цена: " . $row["price"] . " Сомонӣ</p>";
            echo "<form action='add_to_cart.php' method='POST'>";
            echo "<input type='hidden' name='dish_id' value='" . $row["id"] . "'>";
            echo "<input id='quantity' type='number' name='quantity' value='1' min='1' max='100'>";
            echo "<br>";
            echo "<button id='button_dish' type='submit'>Дохилкуни ба корзина</button>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "Холо хӯрок мавҷуд нест!.";
    }
    $connect->close();
    ?>
</div>
<br>
</body>
</html>
