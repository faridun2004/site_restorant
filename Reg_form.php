<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(img/789789.jpg);
        }

        .frm {
            text-align: center;
            font-size: 32px;
            margin: 5vh 20vh;
        }

        .int {
            font-size: 32px;
        }

        .btn {
            font-size: 32px;
            margin-top: 5vh;
        }

        .hh {
            font-size: 60px;
            color: rgb(236, 152, 25);
            font-weight: 900;
        }

        .leb {
            color: rgb(243, 242, 240);
            font-weight: 1000;
        }
    </style>
</head>
<body>
<div class="frm">
    <h2 class="hh">Бақайдгирӣ</h2>
    <form action="Addition/registration.php" method="post">
            <label class="leb" for="name">Ному насаби шумо<label><br>
                <input name="name" class="int" type="text" id="name" placeholder="Ф.И.О"><br>
                <label  class="leb" for="adrec"> Почта электроний</label><br>
                <input name="email" class="int" type="email"  placeholder="user@gmail.com"><br>
                <label class="leb" for="tel">Телефон</label><br>
                <input name="phone" class="int" type="text" id="tel" placeholder="+992-92-000-00-00"><br>
                <label class="leb" for="adrec">Адрес</label><br>
                <textarea name="address"  class="int" id="adrec" cols="22" rows="2" placeholder="адрес"></textarea><br>
                <button class="btn" type="submit">Фиристодан</button>
    </form>
</div>

</body>

</html>