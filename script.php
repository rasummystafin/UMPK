<?php
require_once "connect.php";
$login = $_POST["login"];
$password = $_POST["password"];
$query = "INSERT INTO hospital (login, password) VALUES ('".$login."', '".$password."')";
mysqli_query($connect, $query);

?>