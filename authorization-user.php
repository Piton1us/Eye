<?php

session_start();

function redirect(){
   header('Location: login-user.php');
   exit;
}

   require('db.php');

   $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
   $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

   $_SESSION['name'] = $login;
   $password = md5($password);
   $_SESSION['password'] = $password;

   $sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";

   $result = mysqli_query($connect,$sql);
   
   $user = mysqli_fetch_assoc($result);
   

   if(count($user) == 0){

      $_SESSION['msgBox'] = 'Такой пользоваьтель не найден';
      redirect();
   }
   
   

   

   header('Location: index.php');
     

   
   mysqli_close($connect);

  





?>