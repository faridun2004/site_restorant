<?php
global $connect;
require_once '../config/connect.php';
$table_number=$_POST['number_stolik'];
$sql = "SELECT * FROM zakal_st WHERE number_stolik = $table_number";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    // Столик занят
    echo "Стол $table_number занят";
} else {
    // Столик свободен
    echo "Стол $table_number свободен";
}
?>

