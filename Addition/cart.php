<?php
session_start();
global $connect;
require_once '../config/connect.php';

// Обработка удаления продукта из корзины
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_from_cart'])) {
    $dish_id = $_POST['dish_id'];
    // Удаление продукта из корзины
    unset($_SESSION['cart'][$dish_id]);
    // Перезагрузка текущей страницы
    echo "<script>window.location = window.location.href;</script>";
    exit();
}

// Проверка наличия корзины в сессии
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    // Ваш код, если корзина пуста
} else {
    echo "<ul>";
    $total_price = 0;
    // Вывод содержимого корзины
    foreach ($_SESSION['cart'] as $dish_id => $quantity) {
        $sql = "SELECT name, price FROM dishes WHERE id = $dish_id";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $dish_name = $row["name"];
                $dish_price = $row["price"];
                $total_price = ($dish_price * $quantity) + $total_price;
                // Создание массива с информацией о блюде для отображения
                $cart_items[] = array(
                    "name" => $dish_name,
                    "price" => $dish_price,
                    "quantity" => $quantity,
                    "id" => $dish_id // Добавляем ID блюда для удаления
                );
            }
        }
    }
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <style>
        body {
            background-color: rgb(173, 111, 12);
        }

        .cart {
            text-align: center;
            align-items: center;
        }

        .h2 {
            font-size: 34px;
            color: azure;
            align-items: center;
        }

        .p {
            font-size: 26px;
            align-items: center;
        }

        .li {
            font-size: 26px;
            align-items: center;
        }

        .form {
            text-align: center;
        }
    </style>
</head>

<body>
<h1 id="h1_h1"><a href="menu.php" style="float: left;color: white"><img src="../img/icons8_undo.ico"></a></h1>
<div class="cart">
    <h2 class="h2">Корзина</h2>
    <?php if (empty($cart_items)): ?>
        <p class="p">Корзина пуста</p>
    <?php else: ?>
        <ul>
            <?php foreach ($cart_items as $item): ?>
                <li class="li">
                    <?php echo $item['name']; ?> - Количество:
                    <?php echo $item['quantity']; ?> - Цена: $
                    <?php echo $item['price']; ?>
                    <!-- Форма для удаления продукта из корзины -->
                    <form action="" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить этот продукт из корзины?');">
                        <input type="hidden" name="dish_id" value="<?php echo $item['id']; ?>">
                        <button type="submit" name="remove_from_cart">Удалить</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="p">Итого: $
            <?php echo number_format($total_price, 2); ?>
        </p>
    <?php endif; ?>
</div>

</body>

</html>

<?php
echo "<form  method='POST' class='form'>";
echo "<label for='delivery_method'>Выберите способ доставки:</label>";
echo   " <select name='delivery_method' id='delivery_method'>";
echo     "  <option value='restaurant'>В ресторане</option>";
echo       " <option value='delivery'>Доставка</option>";
echo    "</select>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, был ли выбран способ доставки
    if (isset($_POST['delivery_method'])) {
        $delivery_method = $_POST['delivery_method'];

        // Определяем, куда перенаправить в зависимости от выбранного способа доставки
        if ($delivery_method == 'delivery') {
            header("Location: ../Reg_form.php"); // Перенаправляем на страницу доставки
            exit();
        } elseif ($delivery_method == 'restaurant') {
            header("Location: ../TABLE-BRON.php"); // Перенаправляем на страницу для заказа в ресторане
            exit();
        }
    } else {
        // Если способ доставки не был выбран, можно вывести сообщение об ошибке или просто перенаправить обратно на страницу формы
        header("Location: checkout.php");
        exit();
    }
}
echo "<br><br>";
echo    "<button type='submit' name='place_order'>Оформить заказ</button>";
echo "</form>";
?>
