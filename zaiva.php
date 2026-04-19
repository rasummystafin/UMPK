<?php
require_once "connect.php";

$adress = $_POST["adress"];
$number = $_POST["number"];
$fio = $_POST["fio"];
$datetime = $_POST["datetime"];
$status = "В обработке";

$sql = "INSERT INTO zaiva (adress, number, fio, status, datetime) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $adress, $number, $fio, $status, $datetime);
    
if (mysqli_stmt_execute($stmt)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Заявка отправлена</title>
        <style>
            body {
                font-family: Arial;
                background: #ffffff;
            }
            .textT {
                background: #c3c3c3;
                padding: 20px
            }
            h2 {
                text-align: center;
                color: #040082;
            }
            p strong {
                color: #040082;
            }
            a {
                color: #040082;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="textT">
            <h2>Заявка успешно отправлена!</h2>
            <p><strong>Адрес:</strong> <?php echo htmlspecialchars($adress); ?></p>
            <p><strong>Номер:</strong> <?php echo htmlspecialchars($number); ?></p>
            <p><strong>ФИО:</strong> <?php echo htmlspecialchars($fio); ?></p>
            <p><strong>Статус:</strong> <?php echo htmlspecialchars($status); ?></p>
            <p><strong>Дата и время:</strong> <?php echo htmlspecialchars($datetime); ?></p>
            <br>
            <a href='zaiva_list.php'>Посмотреть все заявки</a>
        </div>
    </body>
    </html>
    <?php
}
?>