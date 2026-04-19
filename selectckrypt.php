<?php
require_once "connect.php";
$query = $connect->query("SELECT * FROM login");
while($row = $query->fetch_assoc()){
    var_dump($raw);
    echo "<br>";
}
?>