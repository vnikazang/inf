<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link));

$sql = "CREATE TABLE staff (
	id_staff int(10) auto_increment,	
	name_staff varchar(50) not null,
	working_schedule varchar(100) not null,
	a_salary int(100) not null,
	id_store int(10) not null,
	primary key (id_staff)
	)";
if (mysqli_query($link, $sql)) {
	echo "Table created successfully<br>";
} else {
	echo "Error creating table: " . mysqli_error($link) . "<br>";
}

$sql = "CREATE TABLE store (
	id_store int(10) auto_increment,
	section_num int(10) not null,	
	id_product varchar(50) not null,
	amount_of_working_hours varchar(50) not null,
	id_staff int(50) not null,
	working_hours varchar(100) not null,
	id_client int(10) not null,
	store_name varchar(50) not null,
	primary key (id_store)
	)";
if (mysqli_query($link, $sql)) {
	echo "Table created successfully<br>";
} else {
	echo "Error creating table: " . mysqli_error($link) . "<br>";
}

$sql = "CREATE TABLE product (	
	id_product int(10) auto_increment,
	id_supply_company int(10) not null,
	section_num int(50) not null,
	product_name varchar(50) not null,
	supply_contract_num int(10) not null,
	primary key (id_product)
	)";
if (mysqli_query($link, $sql)) {
	echo "Table created successfully<br>";
} else {
	echo "Error creating table: " . mysqli_error($link) . "<br>";
}

$sql = "CREATE TABLE salary (
	amount_of_working_hours int(10) not null,
	a_salary int(100) auto_increment,
	id_staff int(10) not null,
	primary key (a_salary)
	)";
if (mysqli_query($link, $sql)) {
	echo "Table created successfully<br>";
} else {
	echo "Error creating table: " . mysqli_error($link) . "<br>";
}

$sql = "CREATE TABLE clients (
	id_client int(10) auto_increment,
	client_name varchar(50) not null,
	client_phone_number varchar(50) not null,
	client_email varchar(50) not null,
	primary key (id_client)
	)";
if (mysqli_query($link, $sql)) {
	echo "Table created successfully<br>";
} else {
	echo "Error creating table: " . mysqli_error($link) . "<br>";
}

$sql = "CREATE TABLE supply_contract (
	id_supply_company int(10) not null,
	supply_contract_num int(10) auto_increment,
	id_delievery_guy int(10) not null,
	name_delievery_guy varchar(50) not null,
	primary key (supply_contract_num)
	)";
if (mysqli_query($link, $sql)) {
	echo "Table created successfully<br>";
} else {
	echo "Error creating table: " . mysqli_error($link) . "<br>";
}

$sql = "CREATE TABLE delievery(
	id_delievery_guy int(10) not null,
	supply_contract_num int(10) not null,
	id_supply_company int(10) auto_increment,
	date_time varchar(50) not null,
	id_product int(10) not null,
	primary key(id_supply_company)
	)";
if (mysqli_query($link, $sql)) {
	echo "Table created successfully<br>";
} else {
	echo "Error creating table: " . mysqli_error($link) . "<br>";
}


$query = "INSERT INTO staff VALUES(21,'Jay Montes','10:00-18:00',120,1)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO staff VALUES(22,'Mont South','16:00-22:00',110,2)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO staff VALUES(23,'Tarryn May','9:00-16:00',125,3)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO staff VALUES(25,'Lon Stuart','16:00-21:00',120,3)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO staff VALUES(24,'Larry Roff','15:00-22:00',130,2)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO store VALUES(1,2,230,12,21,'10:00-22:00',156,'Sonesofrock')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO store VALUES(2,5,76,13,22,'9:00-22:00',732,'Jerome')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO store VALUES(3,7,87,12,23,'9:00-21:00',432,'BASED')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO product VALUES(230,325,5,'guitar',42)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO product VALUES(76,209,7,'ukulele',38)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO product VALUES(87,508,2,'bongo',55)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO product VALUES(90,42,3,'flute',75)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO salary VALUES(8,121,21)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO salary VALUES(7,125,23)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO salary VALUES(6,110,22)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO salary VALUES(5,120,25)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO salary VALUES(7,130,24)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO clients VALUES(156,'Sander Vanel','890345667865','sanv@gmail.com')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO clients VALUES(732,'Kelly Clark','890375607865','kclark@gmail.com')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO clients VALUES(431,'Ben Hall','893445669808','benny@gmail.com')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO supply_contract VALUES(325,42,98,'Samuel Keys')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO supply_contract VALUES(209,38,48,'Roland Lons')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO supply_contract VALUES(508,55,90,'Kim Mjork')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO supply_contract VALUES(42,75,35,'Forgus Slim')";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO delievery VALUES(98,42,325,'28.09.15',230)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO delievery VALUES(48,38,209,'28.09.15',76)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO delievery VALUES(90,55,508,'05.11.16',87)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}

$query = "INSERT INTO delievery VALUES(35,75,42,'29.03.14',90)";
if (mysqli_query($link, $query)) {
	echo "Данные добавлены<br>";
} else {
	echo "Error insert data: " . mysqli_error($link) . "<br>";
}
mysqli_close($link);
?>

