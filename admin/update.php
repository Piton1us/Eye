<?php
      require('../admin/header.php')
?>

<?php

   $id = $_GET['id'];

   require('../db.php');

   $sql = "SELECT * FROM `film` WHERE id='$id'";

   $result = mysqli_query($connect,$sql);

   while($row = mysqli_fetch_assoc($result)):
     
?>



<div class="container-form-update">
   <form class="form-update-img" action="update-script?id=<?php echo $row['id'] ?>&img=<?php echo $row['img'] ?>" enctype="multipart/form-data" method="POST">
      <h3>Обновить постер</h3>
         <input name="images" type="hidden" value="<?php echo $row['img'] ?>">

         <img src="../img/<?php echo $row['img'] ?>" alt="<?php echo $row['id'] ?>">

         <input name="file" type="file">

         <button class="btn-update-form" name="btn-update-images" type="submit"><span 
         class="material-icons">cached</span>Обновить фото</button>

   </form>


   <form class="form-update" action="update-script?id=<?php echo $row['id'] ?>" method="POST">
      <h3>Обновить данные фильма</h3>

         <input name="title" type="text" value="<?php echo $row['title'] ?>" placeholder="Название фильма" >

         <input name="img" type="hidden" value="<?php echo $row['img'] ?>" >

         <input name="description" type="textarea" value="<?php echo $row['description'] ?>" placeholder="Описание" >

         <input name="category" type="number" value="<?php echo $row['category'] ?>" placeholder="Жанр" >

         <input name="link" type="text" value="<?php echo $row['link'] ?>" placeholder="Ccылка на трейлер" >

         <button class="btn-update-form" name="btn-update" type="submit"><span class="material-icons">cached</span>Обновить</button>

   </form>
</div>

<?php endwhile ?>

<?php require('../admin/footer.php') ?>