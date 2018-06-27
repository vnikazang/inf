<?php
require_once 'connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка подключения" . mysqli_error($link));

$result = mysqli_query($link,"SELECT staff.id_staff AS id_staff, store.store_name AS store_name, store.id_product AS id_product, salary.a_salary AS a_salary, store.id_store AS id_store
FROM store
JOIN staff ON staff.id_store = store.id_store
JOIN salary ON salary.a_salary = staff.a_salary") or trigger_error(mysql_error()." in ". $sql);

echo "<table border='1'>
<tr>
<th>id магазина</th>
<th>id рабочего</th>
<th>имя магазина</th>
<th>id товара</th>
<th>зарплата</th>
<th colspan=2>editing</th>
</tr>";

#$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row["id_store"] . "</td>";
echo "<td>" . $row["id_staff"] . "</td>";
echo "<td>" . $row["store_name"] . "</td>";
echo "<td>" . $row["id_product"] . "</td>";
echo "<td>" . $row["a_salary"] . "</td>";
echo "<td><a href='edit.php?id_staff=" . $row['id_staff'] . "'>Редактировать</a></td>";
echo "<td><a href='delete.php?id_staff=" . $row['id_staff'] . "'>Удалить</a></td>";
echo "</tr>";
}
echo "</table>"; 

mysqli_close($link);
?>