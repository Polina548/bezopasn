<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<?php
include 'connect.php';
$result = mysqli_query($link, 'SELECT tag FROM tags');
while ($row = mysqli_fetch_array($result)) {
echo $row['tags'];
}
?>
</body>
</html>
