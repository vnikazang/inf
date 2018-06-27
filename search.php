<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_error($link));

// variables

$a_salary = strtr($_GET['a_salary'], '*', '%');
$id_store = strtr($_GET['id_store'], '*', '%');

// form

echo "<b>SALARY SEARCH</b><br>
<form method='GET' action='search.php'>
<p>Choose a_salary: <input type='text' name='a_salary' value='$a_salary'></p>
<p>Choose id_store: <input type='text' name='id_store' value='$id_store'></p>
<p><input type='submit' name='enter' value='Search'></p>
</form>";

if (isset($_GET['enter'])) {

$sql ="SELECT staff.id_staff AS id_staff, store.store_name AS store_name, product.id_product AS id_product, salary.a_salary AS a_salary, store.id_store AS id_store
FROM store
JOIN staff ON staff.id_store = store.id_store
JOIN product ON product.id_product = store.id_product
JOIN salary ON salary.a_salary = staff.a_salary
WHERE salary.a_salary LIKE '%$a_salary%' AND store.id_store LIKE '%$id_store%'";

$q = mysqli_query($link, $sql);

echo "<table border='1'>
<tr>
<th>id магазина</th>
<th>id рабочего</th>
<th>имя магазина</th>
<th>id товара</th>
<th>зарплата</th>
</tr>";

while($row = mysqli_fetch_array($q))
{
echo "<tr>";
echo "<td>" . $row["id_store"] . "</td>";
echo "<td>" . $row["id_staff"] . "</td>";
echo "<td>" . $row["store_name"] . "</td>";
echo "<td>" . $row["id_product"] . "</td>";
echo "<td>" . $row["a_salary"] . "</td>";
echo "</tr>";
}
echo "</table>"; 
}
mysqli_close($link);
?>
