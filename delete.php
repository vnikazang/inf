<?php
header("Location: list.php");

require_once 'connection.php';
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die ("Ошибка подключения к базе данных" . mysqli_error());


$id_staff = $_GET["id_staff"];

$sql = "DELETE
        FROM staff
        WHERE id_staff = " . $id_staff . ";";
if (mysqli_query($link, $sql)) {
  
  echo "Ok";
} else {
  
  echo "Error" . mysqli_error($link);
}

mysqli_close($link);
?>