<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <?php
   
      require('src.php')
   ?>
   <title>Вход</title>
</head>
<body>

<div class="container-authorization">
   <form class="authorization" action="authorization-admin.php" method="POST">
      <img src="../img/lojowhite.png" alt="logo">
      <h3>Панель администратора</h3>
         <div class="item-form">
            <input type="text" name="login" required placeholder="Введите логин">
            <input type="password" name="password" id="password"  placeholder="Введите пароль">

         </div>
         <p>
            <?php
               echo $_SESSION['msgBox'];
            ?>
         </p>
         <button name="btn-authorization" type="submit">Войти</button>
   </form>
</div>



</body>
</html>

<?php

   session_destroy();

?>