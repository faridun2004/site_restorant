<?php

// Страница регистрации нового пользователя

// Соединямся с БД
$link = mysqli_connect("localhost", "root", "root", "dastraskuni");

if (isset($_POST['submit'])) {
    $err = [];

    // проверям логин
    if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {
        $err[] = "Логин танҳо бо ҳарфи ангилисӣ ва рақамҳо гузошта шавад!";
    }

    if (strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) {
        $err[] = "Логин на кам аз 3 символ ва на зиёда аз 30 бошад";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='" . mysqli_real_escape_string($link, $_POST['login']) . "'");
    if (mysqli_num_rows($query) > 0) {
        $err[] = "Бо чунин логин истифодабаранда мавҷуд аст";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if (count($err) == 0) {

        $login = $_POST['login'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link, "INSERT INTO users SET user_login='" . $login . "', user_password='" . $password . "'");
        header("Location: /login.php");
        exit();
    } else {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach ($err as $error) {
            print $error . "<br>";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    .form_auth_block {
        width: 440px;
        height: 560px;
        margin: 0 auto;
        background: #3b64bd;
        background-size: cover;
        border-radius: 4px;
    }

    .form_auth_block_content {
        padding-top: 15%;
    }

    .form_auth_block_head_text {
        color: #f1eeec;
        text-align: center;
        padding: 10px;
        font-weight: 600;
        font-size: 30px;
        opacity: 0.7;
    }

    .form_auth_block label {
        display: block;
        text-align: center;
        padding: 10px;
        background: #ffffff;
        opacity: 0.7;
        font-weight: 600;
        margin-bottom: 10px;
        margin-top: 10px;
    }

    .form_auth_block input {
        display: block;
        margin: 0 auto;
        width: 80%;
        height: 45px;
        border-radius: 10px;
        border: none;
        outline: none;
    }

    input:focus {
        color: #000000;
        border-radius: 10px;
        border: 2px solid #436fea;
    }

    ::-webkit-input-placeholder {
        color: #3f3f44;
        padding-left: 10px;
    }

    ::-moz-placeholder {
        color: #3f3f44;
        padding-left: 10px;
    }

    :-moz-placeholder {
        color: #3f3f44;
        padding-left: 10px;
    }

    :-ms-input-placeholder {
        color: #3f3f44;
        padding-left: 10px;
    }
</style>
<body>
<form method="POST">
    <div class="form_auth_block">
        <div class="form_auth_block_content">
            <p class="form_auth_block_head_text">Авторизация</p>
            <label>Введите Логин</label>
            <input type="login" name="login" placeholder="Логин" required>
            <label>Введите пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" required><br>
            <input name="submit" type="submit" value="Зарегистрироваться"><br>
            <a href="login2.php"><input type="button" value=" Ман акаунт дорам!"></a><br>
        </div>
    </div>
</form>
</body>
</html>