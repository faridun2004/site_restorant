<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <title>Ресторан</title>

    <link rel="stylesheet" href="css/style.css">
   <!-- <script src="js/main.js"></script>-->
</head>


<body>
<div class=" header ">
    <div class="container ">
        <div class="header-line ">
            <div class="header-logo ">
                <img src="img/LOGO.png " alt=" ">
            </div>

            <div class="nav ">
                <a class="nav-item " href="#">Главная</a>
                <a class="nav-item " href="Addition/menu.php">Меню</a>

                <a class="nav-item " href="sakaz_stol.php">О нас</a>
                <a class="nav-item " href="TABLE-BRON.php">Бронь</a>
            </div>
            <div class="cart ">
                <a href="Addition/cart.php">
                    <img class="cart-img " src="img/cart.png " alt=" ">
                </a>
            </div>
            <div class="phone ">
                <div class="phone-holder ">
                    <div class="phone-img "><img src="img/phone.png " alt=" "></div>
                    <div class="number ">
                        <a class="num " href="# ">+992-92-859-79-97</a>
                    </div>
                </div>
                <div class="phone-text ">Свяжитесь с нами для<br> бронирования </div>
            </div>
            <div class="bton ">
                <a class="button " href="Addition/menu.php">ЗАКАЗ БЛЮДЫ</a>
            </div>

            <div class="burger-menu ">
                <button id="burger ">
                    <img src="img/Ellipse1.png " alt=" ">
                    <script>
                        const burger = document.querySelector('#burger');
                        const menu = document.querySelector('#menu');
                        burger.addEventListener('click', () => {
                            menu.classList.toggle('disp');
                        });
                    </script>
                </button>
            </div>
            <div id="menu " class="burger-slide disp ">
                <a class="nav-item block " href="@ ">Главная</a>
                <a class="nav-item block " href="Addition/menu.php">Меню</a>
                <a class="nav-item block " href="Zakaz_stol.php">О нас</a>
                <a class="nav-item block " href="TABLE-BRON.php">Бронь</a>
            </div>

        </div>



        <div class=" header-down ">
            <div class="header-title ">Добро пожаловать в


                <div class="header-subtitle ">Наш ресторан</div>
                <div class="header-suptitle ">ДОМ ЛУЧШЕЙ ЕДЫ</div>
                <div class="btn ">
<!--                    <a href="AddNewProduct.php" class="header-button ">VIEW MENU</a>-->
                </div>
            </div>
        </div>

    </div>


</div>
<div class="cards ">
    <div class="container ">
        <div class="card-holder ">
            <div class="card ">
                <div class="card-img ">
                    <img src="img/Mask Group.png " alt=" ">
                </div>
                <div class="card-title ">
                    Магическая <span> Атмосфера</span>
                </div>
                <div class="card-desc ">
                    В нашем заведении царит магическая атмосфера наполненная вкусными ароматами
                </div>
            </div>
            <div class="card ">
                <div class="card-img ">
                    <img src="img/Mask Group.png " alt=" ">
                </div>
                <div class="card-title ">
                    Лучшее качество <span> Еды</span>
                </div>
                <div class="card-desc ">
                    Качество нашей<br> Еды - отменное!
                </div>
            </div>
            <div class="card ">
                <div class="card-img ">
                    <img src="img/Mask Group.png " alt=" ">
                </div>
                <div class="card-title ">
                    Недорогая <span>Еда</span>
                </div>
                <div class="card-desc ">
                    Стоимость нашей Еды зависит только от ее количества. Качество всегда на высоте!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="history ">
    <div class="container ">
        <div class="history-holder ">
            <div class="history-info ">
                <div class="history-title ">Наша <span>История</span></div>
                <div class="history-desc ">Как и у любого другого самобытного места, у нас есть своя, особая история. Идея ресторана пришла основателям неожиданно. Во время прогулки по лесу создатель нашего ресторана застрял в сотнях километров от ближайшего населенного пункта.
                    Вдали от цивилизации и связи им пришлось навремя обустровать себе нехитрый быт, добывать и готовить себе еду.</div>

                <div class="history-number ">
                    <div class="number-items ">
                        93 <span>Напитки</span>
                    </div>
                    <div class="number-items ">
                        206 <span>Еда</span>
                    </div>
                    <div class="number-items ">
                        71<span>Закуски</span>
                    </div>
                </div>

            </div>
            <div class="history-imges ">
                <img class="imges-1 " src="img/1.jpg " alt=" ">
                <img class="imges-2 " src="img/2.jpg " alt=" ">
                <img class="imges-3 " src="img/3.jpg " alt=" ">
            </div>
        </div>
    </div>
</div>
<div class="black-block ">
    <div class="container ">
        <div class="block-holder ">
            <div class="left ">
                <div class="left-title ">
                    Отпразднуйте в одном из<br> самых лучших ресторанов.
                </div>
                <div class="left-text ">Только в этом месяце бизнес-ланч от 250 ₽</div>
            </div>
            <div class="right ">
                <div class="right-button ">
                    <a href="Addition/menu.php" class="right-btn ">ЗАКАЗ БЛЮДЫ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dishes ">
    <div class="container ">
        <div class="dishes-title ">Наши <span>Блюда</span></div>

        <div class="foot ">
            <div class="foot-img ">
                <img src="img/pissa.jpg " alt=" ">
            </div>
            <div class="foot-items ">
                <div class="foot-item ">
                    <img src="img/5.webp " alt=" " class="foots ">
                    <div class="foot-text ">
                        Гамбургер мини -------------- 22.с
                    </div>
                </div>
                <div class="foot-item ">
                    <img src="img/5.webp " alt=" " class="foots ">
                    <div class="foot-text ">
                        Гамбургер мини -------------- 22.с
                    </div>
                </div>
                <div class="foot-item ">
                    <img src="img/5.webp " alt=" " class="foots ">
                    <div class="foot-text ">
                        Гамбургер мини -------------- 22.с
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="menu ">
    <div class="container ">
        <div class="menu-title ">
            Наше меню
        </div>
        <div class="menu-items ">
            <div class="menu-item ">
                <div class="menu-image ">
                    <img src="img/6.png " class="menu-img " alt=" ">
                    <div class="price ">
                        <img src="img/Ellipse 2.png " class="price-img " alt=" "></img>
                        <div class="price-420 ">

                        </div>
                    </div>
                </div>
                <div class="menu-text ">
                    Гамбургер макси
                </div>
                <div class="subtext ">
                    Максимально толстый<br> слой мяса
                </div>
                <div class="menu-button ">

                </div>
            </div>
            <div class="menu-item ">
                <div class="menu-image ">
                    <img src="img/6.png " class="menu-img " alt=" ">
                    <div class="price ">
                        <img src="img/Ellipse 2.png " class="price-img " alt=" "></img>
                        <div class="price-420 ">
                            420
                        </div>
                    </div>
                </div>
                <div class="menu-text ">
                    Гамбургер макси
                </div>
                <div class="subtext ">
                    Максимально толстый<br> слой мяса
                </div>
                <div class="menu-button ">

                </div>
            </div>
            <div class="menu-item ">
                <div class="menu-image ">
                    <img src="img/6.png " class="menu-img " alt=" ">
                    <div class="price ">
                        <img src="img/Ellipse 2.png " class="price-img " alt=" "></img>
                        <div class="price-420 ">
                            420
                        </div>
                    </div>
                </div>
                <div class="menu-text ">
                    Гамбургер макси
                </div>
                <div class="subtext ">
                    Максимально толстый<br> слой мяса
                </div>
                <div class="menu-button ">

                </div>
            </div>
        </div>

    </div>
</div>
<div class="coment ">
    <div class="container ">
        <div class="coment-text ">
            Я надолго запомню мой День рождения, проведённый в этом ресторане! Кусочек родной Армении!!! Отдельное спасибо за комплепент в виде фруктовой тарелки. Будем рекомендовать этот ресторан своим друзьям и родственникам также за рубежом, путешествующих в Санкт-Петербург!!!
        </div>
        <div class="coment-image ">
            <img src="img/af.png " alt=" " class="coment-img ">
        </div>
        <div class="coment-type ">
            Посетитель
        </div>
        <div class="coment-name ">
            Ахмедов Сухроб<br>
            <a href="https://www.instagram.com/faridun_juraev_" target="_blank">Мы в Instagram</a>
        </div>



    </div>
</div>
<div class="footer ">
    <div class="container ">
        <div class="foot-holder ">
            <div class="Contact ">

                <h3 class="con "> Контакты</h3>
                <p class="con "> Наш сентер Город Худжанд Ул. А. Исмоилов 131</p>

                <p class="con "> (+992) 92-859-79-97 </p>

                <p class="con "> azamjonsoliev0@gmail.com</p>


            </div>
            <div class="pages " id="con ">
                <h3>Страницы
                </h3>
                <ul>
                    <li>
                        <a href=" ">Главная</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/faridun_juraev_" target="_blank">Мы в Instagram</a>
                    </li>
                    <li>
                        <a href="">О нас</a>
                    </li>
                    <li>
                        <a href=" "> Меню</a>
                    </li>
                    <li>
                        <a href="login.php">Ht==Regi</a>
                    </li>
                </ul>
            </div>
            <div class="form_auth_block">
                <div class="form_auth_block_content">
                    <form method="POST" >
                        <label>Введите Ваш имейл</label>
                        <input type="text" name="login" placeholder="Введите Ваш имейл" required >
                        <label>Введите Ваш пароль</label>
                        <input type="password" name="password" placeholder="Паролро дохил кунед" required ><br>
                        <input name="submit" type="submit" value="Даромадан"><br>
                        <a href="Addition/Addnewproduct.php"><input type="button" value="аз нав бақайдгирӣ"></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
session_start();

// Проверяем, есть ли сообщение из предыдущей страницы
if (isset($_SESSION['message'])) {
    echo "<p>{$_SESSION['message']}</p>";
    unset($_SESSION['message']); // Удаляем сообщение из сессии после его отображения
}
?>
<script>
    const burger = document.querySelector('burger');
    const menu = document.querySelector('menu');
    burger.addEventListener('click', () => {
        menu.classList.toggle('disp');
    });
</script>
</body>

</html>