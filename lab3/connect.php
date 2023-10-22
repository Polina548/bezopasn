<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = 'root';
$dbname = 'tags';

$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$link) {
die("Ошибка: " . mysqli_connect_error());
}
?>
