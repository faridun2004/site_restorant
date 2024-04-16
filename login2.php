<?
// Страница авторизации

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "root", "dastraskuni");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        // Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: /index.php"); exit();
    }
    else
    {
        print_r("Шумо парол ё логинро хато ворид намудед!");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        background: #f5f5f5;
    }
    .form_auth_block{
        width: 500px;
        height: 340px;
        margin: 0 auto;
        background: #0b1557;
        background-size: cover;
        border-radius: 4px;
    }

    .form_auth_block label{
        display: block;
        text-align: center;
        padding: 10px;
        background: #ffffff;
        opacity: 0.7;
        font-weight: 600;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .form_auth_block input{
        display: block;
        margin: 0 auto;
        width: 80%;
        height: 45px;
        border-radius: 10px;
        border:none;
        outline: none;
    }
    input:focus {
        color: #100a0a;
        border-radius: 10px;
        border: 2px solid #436fea;
    }
</style>
<body>
<div class="form_auth_block">
    <div class="form_auth_block_content">
        <form method="POST" >
            <label>Введите Ваш имейл</label>
            <input type="text" name="login" placeholder="Введите Ваш имейл" required >
            <label>Введите Ваш пароль</label>
            <input type="password" name="password" placeholder="Паролро дохил кунед" required ><br>
            <input name="submit" type="submit" value="Даромадан"><br>
            <a href="index.php"><input type="button" value="аз нав бақайдгирӣ"></a>
        </form>
    </div>
</div>
</body>
</html>

