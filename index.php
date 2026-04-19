<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>Вход</h1>
        
        <label>Логин:</label>
        <input type="text" name="logins" required>
        
        <label>Пароль:</label>
        <input type="text" name="passwords" required>
        
        <button type="submit">Войти</button>
    </form>
    <style>
        body {
        font-family: Arial;
        background: #ffffff;
        padding: 100px;
        }
        form {
        background: #c3c3c3;
        padding: 20px;
        border-radius: 2px;
        }
        
        h1 {
        text-align: center;
        }
        
        input {
        padding: 8px;
        }
        
        button {
        padding: 10px;
        background: #040082;
        }
    </style>
</body>
</html>