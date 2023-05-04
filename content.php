
<?php

require('db.php');

$sql = "SELECT * FROM `film` ORDER BY id DESC";

$result = mysqli_query($connect,$sql);

unset($_SESSION['page-two']);



?>

<?php

   $login = $_SESSION['name'];
   $password = $_SESSION['password'];

   $sqlUser = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";

   $resultUser = mysqli_query($connect,$sqlUser);

   $user = mysqli_fetch_assoc($resultUser);
   

?>

   <section class="introduction">
      
      <h1>
         Онлайн кинотеатр Eye<br>
         Лучшие фильмы онлайн
      </h1>
   </section>

  

   <main>

   <form action="category-script.php" id="1" method="post">
      
   <select name ="time" form="1">
            <option value="all">Все категории</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="10:00">10:00</option>
            <option value="11:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>


         </select>

   </form>


   <?php   

      while($row = mysqli_fetch_assoc($result)):
   ?>

   <a  href="page-film?id=<?php echo $row['id'] ?>&userid=<?php echo $_SESSION['id_user'] ?>">
      <div class="film-card">
         <img src="../img/<?php echo $row['img']?>" alt="123">
         <h2><?php echo $row['title'] ?></h2>
         

      </div>
   </a>     
   

   <?php endwhile ?>
   </main>