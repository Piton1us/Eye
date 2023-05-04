
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <?php
      require('src.php')
   ?>

   <title>Eye</title>
</head>
<body>
  

   <header>
      <div class="heading">
         <img src="img/lojowhite.png" alt="logo">
         <a href="index.php"><h1>Онлайн кинотеатр</h1></a>
      </div>

      <?php if ($_SESSION['name'] == ''): ?>
      <div class="enter">
         <a href="login-user.php">Вход</a><span>|</span><a href="admin/registration.php">Регистрация</a>
      </div>


      <?php else: ?>   
      <div class="login">
         
         <div>
            <a href="cabinet.php">Ваш кабинет</a>
         </div>
         <div class="greetings">
            <a >Привет: <?= $_SESSION['name']; ?></a>
            <a name="btn-exit" href="../admin/logout"><span class="material-icons">exit_to_app</span></a>
         </div>
      </div>
      <?php endif; ?>
   </header>