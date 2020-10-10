<?php
$login = $_POST['user_name'];
$password = $_POST['user_password'];
include"config.php";
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0){
 echo"Неверный логин или пароль";
 $mysql->close();
 exit();
}
$role = $user['role'];
if($role == "admin"){
setcookie('admin', $user['role'], time() + 3600 * 24 * 30 * 12, "/");
}
elseif ($role == "rso") {
setcookie('rso', $user['role'], time() + 3600 * 24 * 30 * 12, "/");
}
elseif ($role == "dispacher") {
setcookie('dispacher', $user['role'], time() + 3600 * 24 * 30 * 12, "/");
}
else{
setcookie('observer', $user['role'], time() + 3600 * 24 * 30 * 12, "/");	
}
header('Location:/');
?>