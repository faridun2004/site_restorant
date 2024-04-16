<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка доступности стола в ресторане</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;

            color: #333;
        }

        input[type="number"] {
            padding: 10px;

            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;

        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Проверка доступности стола в ресторане</h1>
    <form action="vendor/check_av.php" method="post">
        <label for="number_stolik">Введите номер стола:(1-40)</label>
        <input type="number" id="number_stoli" name="number_stolik" required min="1" max="40">
        <button type="submit">Проверить доступность</button>
    </form>
</div>
</body>
</html>
