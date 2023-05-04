<?php

session_start();

function redirect(){
   header('Location: login-admin.php');
   exit;
}

   require('../db.php');

   $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
   $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

   
   $password = md5($password);
   $_SESSION['password'] = $password;

   $sql = "SELECT * FROM `admins` WHERE `login` = '$login' AND `password` = '$password'";

   $result = mysqli_query($connect,$sql);
   
   $user = mysqli_fetch_assoc($result);

   //var_dump($user);

   $_SESSION['name'] = $login;
   $_SESSION['password'] = $password;

   if(count($user) == 0){

      $_SESSION['msgBox'] = 'Такой пользователь не найден';
      redirect();
   }
   
   $id_admin = $user['id'];
  
   
   header("Location: /admin/index?id_admin=$id_admin");
      

   
   mysqli_close($connect);

  





?>