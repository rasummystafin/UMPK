<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заявки</title>
</head>
<body>
    <form action="zaiva.php" method="post">
        <h1>Создание заявки</h1>
        
        <label>Полный адрес:</label>
        <input type="text" name="adress" required><br>
        
        <label>Номер:</label>
        <input type="text" name="number" required><br>
        
        <label>ФИО:</label>
        <input type="text" name="fio" required><br>
        
        <label>Дата и время:</label><br>
        <input type="datetime-local" name="datetime" required><br><br>
        
        <button type="submit">Отправить</button>
    </form>
    <style>
        body {
            font-family: Arial;
            background: #ffffff;
        }
        
        form {
            background: #c3c3c3;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
        }
        input[type="text"],
        input[type="datetime-local"] {
            padding: 8px;
            width: 100%;
        }
        input[type="radio"] {
            margin: 5px;
        }
        
        button {
            background: #040082;
            color: #ffffff;
            margin-top: 10px;
        }
        a {
            color: #040082;
        }
    </style>
    <?php
    echo "<br><a href='zaiva_list.php'>Посмотреть все заявки</a><br>";
    ?>
</body>
</html>