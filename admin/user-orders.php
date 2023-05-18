<?php require("../admin/header.php")  ?>
<?php 

   require("../db.php");

   $sql = "SELECT * FROM `users` INNER JOIN `users_info` ON users.id = users_info.id_user";

   $result = mysqli_query($connect,$sql);

   

?>

<section class="user-orders">

<?php while($users = mysqli_fetch_assoc($result)): ?>
   <?php //print_r($users); ?>
   <details>
      
      <summary class='user-title'>
         <?php  echo "Индефикатор пользователя: ".$users['id_user'] ." ". "Имя: " . $users['name']." ".$users['surname']."."   ?>
      </summary>
      
   <?php  
      $user_id = $users['id_user'];
      $sql_orders = "SELECT * FROM `booking` WHERE user_id = '$user_id'";
      $result_orders = mysqli_query($connect,$sql_orders);

      while($orders = mysqli_fetch_assoc($result_orders)):
         
   ?>
       
      <div class="order_details">
         <span class="border_span">Номер заказа: <?php echo $orders['id']?></span>
         <span class="border_span">Id фильма: <?php echo $orders['film_id']?></span>
         <span class="border_span">Дата: <?php echo $orders['data']?></span>
         <span class="border_span">Время: <?php echo $orders['time']?></span>
         <span class="border_span">Ряд: <?php echo $orders['row']?></span>
         <span class="border_span">Место: <?php echo $orders['seat']?></span>
         <span class="border_span">Способ Оплаты: <?php echo $orders['payment']?></span>
         <span class="border_span">Стоимость билета: <?php echo $orders['price']?></span>
         <span class="border_span">Статус: <?php echo "Обработано"?></span>
         
   </div>

      <?php endwhile; ?>   
   </details>

   
  
<?php endwhile; ?>




</section>






















<footer>
      <div class="copyright">
         Все права защищены &copy; <?php echo date('Y'); ?>
      </div>


      
   </footer>
   

</body>
</html>