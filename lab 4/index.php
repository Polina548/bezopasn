<?php
session_start();
include 'connect.php';
//используются для получения данных из формы, отправленных методом POST.
//!empty(...) проверяет, что эти значения не пустые.
if (!empty($_POST['password']) and !empty($_POST['login'])) {//Это условие проверяет, были ли отправлены данные POST с полями password и login из формы.
    $login = $_POST['login'];//присваивают значения, полученные из формы, переменным.
    $password = $_POST['password'];//присваивают значения, полученные из формы, переменным.
    $result = $link->query("SELECT * FROM tabl WHERE login='$login' AND password='$password'");
    $user = mysqli_fetch_assoc($result);//получает данные пользователя, если он существует.
    if (!empty($user)) {
    $_SESSION['login'] = $login;
    
        $_SESSION['auth'] = true;//устанавливает аутентификацию, что пользователь аутентифицирован.
        header('Location:index2.php');
    } 
}
?>
<html>
<body> 
<form method="post" action=""> 
      <input name = "login" type="text"  placeholder="Логин" value="<?= $_POST['login']?>"><br>
      <input name = "password" type="password" placeholder="Пароль" value="<?= $_POST['password']?>" >
      <button type="submit">Войти</button>
</body>
</hnml>