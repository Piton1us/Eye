<?php

session_start();

function redirect(){
   header('Location: registration.php');
   exit;
}
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
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

   // Запрос на добавление нового пользователя в таблицу users
   $sql_users = "INSERT INTO `users` (`login`,`password`) VALUES ('$login','$password')";

   $result_users = mysqli_query($connect,$sql_users);


   // Запрос на получение id пользователя что бы вставить в поле users_info
   $sql_user_id = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";

   $res_user_id = mysqli_query($connect,$sql_user_id);

   $user = mysqli_fetch_assoc($res_user_id);
   
   $user_id = $user['id'];




   
   // Запрос на добавление данных в таблицу users_info
  $sql_users = "INSERT INTO `users_info` (`id_user`,`name`,`surname`,`email`,`phone`) VALUES ('$user_id','$name','$surname','$email','$phone')";

   var_dump($sql_users);
   $result = mysqli_query($connect,$sql_users);
   

   mysqli_close($connect);

   header('Location: /login-user.php');





?>