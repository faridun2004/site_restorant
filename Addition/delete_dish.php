<?php
global $connect;
session_start();
require_once '../config/connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dish_id'])) {
    $dish_id = $_POST['dish_id'];

    // Удаление блюда из базы данных
    $sql = "DELETE FROM dishes WHERE id=$dish_id";

    if ($connect->query($sql) === TRUE) {
        echo "Dish deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
}
?>
