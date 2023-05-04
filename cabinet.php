<?php require("header.php") ?>

<?php

$id = $_SESSION['id_user'];

require('db.php');

$sql = "SELECT * FROM `booking` WHERE user_id = '$id' ORDER BY id DESC ";

$result = mysqli_query($connect,$sql);


?>





<main>

<h1 class="tile__history">История</h1>
   
   <?php  while($row = mysqli_fetch_assoc($result)): ?>
      
      <?php
         $film_id = $row['film_id'];  

         $sql = "SELECT * FROM `film` WHERE id = '$film_id'";

         $resultat = mysqli_query($connect,$sql);   
         
         while($arr = mysqli_fetch_assoc($resultat)):
      ?>
      
   <div class="history"> 
         <h3>Фильм: <?php echo $arr['title'] ?></h3>
         <div class="history__card">
            <img src="img/<?php echo $arr['img'] ?>" alt="постер">
           
            <p>Дата сеанса: <?php echo $row['data'] ?></p>
            <p>Время сеанса: <?php echo $row['time'] ?></p>
            <p>Ряд: <?php echo $row['row'] ?></p>
            <p>Место: <?php echo $row['seat'] ?></p>
         </div>
   </div>    

      <?php endwhile ?>
   <?php endwhile ?>
</main>














<?php require("footer.php") ?>