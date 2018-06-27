<html>
<body>

<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die ("Ошибка подключения к базе данных" . mysqli_error());


$id_staff = $_GET["id_staff"];
$sql = "SELECT staff.id_staff AS id_staff, store.store_name AS store_name, store.id_product AS id_product, salary.a_salary AS a_salary, store.id_store AS id_store
FROM store
JOIN staff ON staff.id_store = store.id_store
JOIN salary ON salary.a_salary = staff.a_salary
WHERE staff.id_staff = '" . $id_staff . "';";

$result = mysqli_query($link, $sql);
$record = mysqli_fetch_assoc($result);

?>

<form action="update.php" method="get">
    <input type="hidden" name="id_staff" value=<?php echo $id_staff; ?>><br>
    <p>ID магазина:</p>
    <input type="text" name="id_store" value=<?php echo $record['id_store']; ?>><br>
    <p>Имя магазина:</p>
    <input type="text" name="store_name" value=<?php echo $record['store_name']; ?>><br>
    <p>ID товара:</p>
    <input type="text" name="id_product" value=<?php echo $record['id_product']; ?>><br>
	<p>Зарплата:</p>
	<input type="text" name="a_salary" value=<?php echo $record['a_salary']; ?>><br>
    <p><input type="submit"></p>
</form>

</body>
</html>