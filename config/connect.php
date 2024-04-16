<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'bd_prakt');
if (!$connect) {
    die('error connect to database!');
}
//192.168.137.1  192.168.140.103