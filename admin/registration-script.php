<?php

session_start();

function redirect(){
   header('Location: registration.php');
   exit;
}

   require('../db.php');

   $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
   $surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
   $email = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
   $phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
   $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
   $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

   if(strlen($login) > 20){
      $_SESSION['msgBox'] = 'Недопустимая длина логина';
      redirect();
   }

   if(strlen($password) > 20){
      $_SESSION['msgBox'] = 'Недопустимая длина пароля';
      redirect();
   }

   $_SESSION['name'] = $name;
   $password = md5($password);

   $sql = "INSERT INTO `users` (`name`,`surname`,`email`,`phone`,`login`,`password`) VALUES ('$name','$surname','$email','$phone','$login','$password')";

   $result = mysqli_query($connect,$sql);
   

   mysqli_close($connect);

   header('Location: /login-user.php');





?>