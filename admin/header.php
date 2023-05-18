<?php

session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
   
   <?php
      require('../admin/src.php')
   ?>

   <title>Панель администратора</title>
</head>
<body>
  

   <header>
      <div class="heading">
         <img src="../img/lojowhite.png" alt="logo">
         <a href="../admin/index.php"><h1>Панель администратора</h1></a>
      </div>

      <div class="orders">
         <a href="../admin/user-orders.php">Заказы</a>
      </div>

      <div class="login">
            Привет: <?= $_SESSION['name']; ?>
            <a name="btn-exit" href="logout"><span class="material-icons">exit_to_app</span></a>
         </div>
   </header>