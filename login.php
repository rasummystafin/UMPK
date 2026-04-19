<?php
require_once "connect.php";
$logins = $_POST["logins"];
$passwords = $_POST["passwords"];
$sql = "SELECT * FROM hospital WHERE login = '$logins' and password = '$passwords'";
$result = $connect->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        header("Location: profile.php");
    }
} else {
    echo "неверный пользователь";
}
?>