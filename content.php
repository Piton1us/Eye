
<?php

require('db.php');

$sql = "SELECT * FROM `film` ORDER BY id DESC";

$result = mysqli_query($connect,$sql);

$id_category = $_GET['id_category'];



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

   <form class="category" action="category-script.php" id="1" method="POST">
      
      <select  name ="categories" form="1">
               <option value="0">Все категории</option>
               <option value="1">комедии</option>
               <option value="2">боевики</option>
               <option value="3">детективы </option>
               <option value="4">драмы</option>
               <option value="5">документальные</option>
               <option value="6">исторические</option>
               <option value="7">мистика</option>
               <option value="8">мультфильмы</option>
               <option value="9">приключения</option>
               <option value="10">ужасы</option>
               <option value="11">фантастика</option>
               <option value="12">фэнтази</option>

      </select>
      <button class="btn-add-form" name="next-second" type="submit">Поиск</button>
   </form>
   <main>

   <?php if($id_category == '' || $id_category == 0): ?>

      <?php while($row = mysqli_fetch_assoc($result)): ?>
      
        
               <a  href="page-film?id=<?php echo $row['id'] ?>&userid=<?php echo $user['id'] ?>">
                  <div class="film-card">
                     <img src="../img/<?php echo $row['img']?>" alt="123">
                     <h2><?php echo $row['title'] ?></h2>
                     
                  
                  </div>
               </a>     
             
      
   <?php endwhile ?>

   <?php else: ?>     
      <?php while($row = mysqli_fetch_assoc($result)): ?>
         <?php if($row['category'] == $id_category): ?>
         
                  <a  href="page-film?id=<?php echo $row['id'] ?>&userid=<?php echo $user['id'] ?>">
                     <div class="film-card">
                        <img src="../img/<?php echo $row['img']?>" alt="123">
                        <h2><?php echo $row['title'] ?></h2>
                        
                     
                     </div>
                  </a>     
               
         <?php endif ?>
      <?php endwhile ?>
   <?php endif ?>
   </main>