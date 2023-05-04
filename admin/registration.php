<?php

   session_start();

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   
      require('src.php')
   ?>
   <title>Регистрация</title>
</head>
<body>

<div class="container-authorization">
   <form class="authorization" action="registration-script.php" method="POST">
      <img src="../img/lojowhite.png" alt="logo">
      <h3>Регистрация</h3>
         <div class="item-form">
            <input type="text" name="name" required placeholder="Введите имя" required>
            <input type="text" name="surname" required placeholder="Введите фамилию" required>
            <input type="email" name="mail" required placeholder="Введите почту" required>
            <input type="tel" name="phone" required placeholder="Введите телефон" required>
            <input type="text" name="login" required placeholder="Введите логин" required>
            <input type="password" name="password" id="password"  placeholder="Введите пароль" required>

         </div>
         <p>
            <?php
               echo $_SESSION['msgBox'];
            ?>
         </p>
         <button name="btn-authorization" type="submit">Зарегистрироваться</button>
   </form>
</div>



</body>
</html>

<?php

   session_destroy();

?>