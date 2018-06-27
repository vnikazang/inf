<?php
require_once 'connection.php';
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die ("Ошибка подключения к базе данных" . mysqli_error());

header("Location: list.php");


$id_staff = $_GET['id_staff'];
$id_product = $_GET['id_product'];
$store_name = $_GET['store_name'];
$a_salary = $_GET['a_salary'];
$id_store = $_GET['id_store'];

$sql = "UPDATE staff
        SET a_salary = '" . $a_salary . "', id_store = '" . $id_store . "'
        WHERE id_staff=" . $id_staff . ";";

if (mysqli_query($link, $sql)) {
  echo "OK";
} else {
  echo "Error" . mysqli_error($link);
}

$sql = "UPDATE salary
        SET a_salary = '" . $a_salary . "' 
        WHERE id_staff=" . $id_staff . ";";

if (mysqli_query($link, $sql)) {
  echo "OK";
} else {
  echo "Error" . mysqli_error($link);
}

$sql = "UPDATE store
        SET store_name = '" . $store_name . "', id_store = '" . $id_store . "' , id_product = '" . $id_product . "'
        WHERE id_staff=" . $id_staff . ";";



if (mysqli_query($link, $sql)) {
  echo "OK";
} else {
  echo "Error" . mysqli_error($link);
}

mysqli_close($link);

?>