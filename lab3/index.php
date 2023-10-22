<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
<form method = "POST" action=" ">
    <input placeholder = "Введите какой-то тег" type='text' Name='tag'>
    <input type = "submit" value="запись">
</form>
<?php
$tag= $_POST['tag'];
include 'connect.php';
$result = mysqli_query($link, 'SELECT tag FROM tags');
while ($row = mysqli_fetch_array($result)) {
echo $row['tags'];
}
?>
</body>
</html>
