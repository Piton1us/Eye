<?php
   session_start();

   if($_SESSION['user_id'] == '' ){
      
     header('Location: /admin/login-admin.php');
     exit();
   }

?>


<?php require('../admin/header.php') ?>




<h1>Список фильмов</h1>


<main>
<?php

require('../db.php');

$sql = "SELECT * FROM `film` ORDER BY id DESC";

$result = mysqli_query($connect,$sql);

while($row = mysqli_fetch_assoc($result)):


?>
   
   <div class="film-card">
      <div class="container-film-card">
         <div>
            <img src="../img/<?php echo $row['img']?>" alt="<?php echo $row['img']?>">
         </div>
         <div class="description-card">
         <h1> Название: <?php echo $row['title']?></h1>
            <p> <span>Описание:</span> <?php echo $row['description']?></p> 
         </div>
      </div>


      <div class="item-btn">
         <section class="btn-left">
               <!-- Делаеи ссылку в атрибуте href на файл update.php и к нему добавляем id выводимой записи -->
               <a class="btn-update" href="update?id=<?php echo $row['id'] ?>"><span class="material-icons">cached</span>Обновить</a>
         </section>

         <section>
               <!-- Делаеи ссылку в атрибуте href на файл delete.php и к нему добавляем id выводимой записи, также передаём название -->
               <a class="btn-delete" href="delete?id=<?php echo $row['id'] ?>&images=<?php echo $row['images'] ?>"><span class="material-icons">delete</span>Удалить</a>
         </section>
      </div>
   </div>







   <?php endwhile?>
</main>

<?php require("../admin/footer.php") ?>