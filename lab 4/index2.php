<?php
session_start();
//проверяет, существует ли переменная $_SESSION['login'], т.е., был ли пользователь аутентифицирован.
if (isset($_SESSION['login'])) {//isset($_SESSION['login']) проверяет, установлена ли переменная $_SESSION['login']s
    $login = $_SESSION['login'];//присваивает значение из сессии 
    echo "Вы вошли как: $login ";
} else {
    echo "Вы не вошли в систему.";
}
?>
<html>
<body>
<form action = "exit.php" method = "post">
  <button type="submit">Выход</button>
</form>
</body>
</html>