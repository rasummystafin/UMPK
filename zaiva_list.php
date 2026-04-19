<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список заявок</title>
    <style>
        body {
            font-family: Arial;
            background: #ffffff;
        }
        form {
            background: #c3c3c3;
        }
        
        input[type="text"] {
            padding: 8px;
        }
        
        button {
            background: #040082;
            color: #ffffff;
        }
        
        a {
            color: #040082;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        
        th {
            background: #c3c3c3;
        }
    </style>
</head>
<body>
    <form method="GET" action="">
        <label>Найти заявку по ФИО:</label><br><br>
        <input type="text" name="search" 
               placeholder="Введите фамилию или имя"
               value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
        <button type="submit">Найти</button>
        <a href="zaiva_list.php">Показать все</a>
    </form>

<?php
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_status']) && isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $new_status = $_POST['status'];
    $update_sql = "UPDATE zaiva SET status = '$new_status' WHERE id = '$id'";
    $connect->query($update_sql);
    header("Location: zaiva_list.php");
    exit();
}

$search = isset($_GET['search']) ? $_GET['search'] : '';

if (!empty($search)) {
    $sql = "SELECT * FROM zaiva WHERE fio LIKE '%$search%' ORDER BY datetime DESC";
    $result = $connect->query($sql);
} else {
    $sql = "SELECT * FROM zaiva ORDER BY datetime DESC";
    $result = $connect->query($sql);
}

if (!empty($search)) {
    echo "Вы искали: <strong>" . htmlspecialchars($search) . "</strong> | ";
    echo "Найдено заявок: <strong>" . $result->num_rows . "</strong>";
    echo "</div>";
}

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Адрес</th>";
echo "<th>Номер</th>";
echo "<th>ФИО</th>";
echo "<th>Статус</th>";
echo "<th>Дата и время</th>";
echo "</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $status_color = ($row['status'] == 'В обработке') ? 'status-processing' : 'status-completed';
        
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['adress']) . "</td>";
        echo "<td>" . htmlspecialchars($row['number']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fio']) . "</td>";
        echo "<td>";
        echo $row['status'] . "<br>";
        echo "<form method='POST' action='' style='margin-top:5px;'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<select name='status'>";
        echo "<option value='В обработке'" . ($row['status'] == 'В обработке' ? 'selected' : '') . ">В обработке</option>";
        echo "<option value='Выполнен'" . ($row['status'] == 'Выполнен' ? 'selected' : '') . ">Выполнен</option>";
        echo "</select>";
        echo "<button type='submit' name='update_status'>Изменить</button>";
        echo "</form>";
        echo "</td>";
        echo "<td>" . $row['datetime'] . "</td>";
        echo "</tr>";
    }
}
echo "</table>";
echo "<br><a href='profile.php' class='create-link'>Создать новую заявку</a>";
$connect->close();
?>
</body>
</html>