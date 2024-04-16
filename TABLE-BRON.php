<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Restaurantly</title>

    <style>
        .container {
            margin: 0px 166px;
        }

        body {
            margin: 0;
        }

        .legend {
            text-align: center;
            color: #fff;
            font-size: 32px;
            font-weight: 700;
        }

        .registr {
            background-image: url(vendor/bar.jpg);
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .form {
            background-color: #FF7400;
            height: 80vh;
            text-align: center;
        }

        .form-inputs {
            margin-top: 50px;
            margin-right: 107px;
            padding: 15px 115px;
            margin-left: 119px;
            font-size: 25px;
        }

        .form-input {
            margin-top: 49px;
            margin-right: 22px;
        }

        .button {
            background-color: #2f261e;
            color: #fff;
            text-decoration: none;
            padding: 14px 17px;
            font-weight: 700;
            transition: background-color 0.2c linear;
            font-size: 20px;
        }

        .button:hover {
            background-color: #d42b4d;
        }

        .reg-holder {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="registr">
    <div class="container">
        <div class="reg-holder">
            <fieldset>
                <legend class="legend">Заказать столик</legend>
                <form action="Addition/create.php" method="post" role="form" class="form" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-inputs" id="name" placeholder="Ваше имя" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-inputs" name="phone" id="phone" placeholder="Номер телефона" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="number" class="form-inputs" name="table_number" id="table_number" placeholder="Номер столика" required>
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-inputs" name="seat_count" id="seat_count" placeholder="Количество мест" min="1" required>
                        <div class="validate"></div>
                    </div>
                    <div class="form-input">
                        <button class="button" type="submit">Фармоиш</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>

</body>
</html>
