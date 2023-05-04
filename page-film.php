

<?php require('header.php') ?>
<?php

   $id = $_GET['id'];
   $idUser = $_GET['userid'];

   require('db.php');

   $sql = "SELECT * FROM `film` WHERE id='$id'";

   $result = mysqli_query($connect,$sql);

   $row = mysqli_fetch_assoc($result);
   
   

?>

   
   <div class="film-container">
      <div class="poster">

         <img src="img/<?php echo $row['img']?>" alt="постер">

         
         <div class="description">
            <h1> Название: <?php echo $row['title'] ?></h1>
            <p> Описание: <?php echo $row['description'] ?></p>

            <a href="order?id=<?php echo $row['id'] ?>&userid=<?php echo $idUser ?>&page=1"><span class="material-symbols-outlined">confirmation_number</span>Купить билет</a>
            
         
         </div>
      </div>
      
      <div class="video">
         <iframe width="100%" height="500px" src="<?php echo $row['link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
     

   </div>


   
   

<?php require('footer.php') ?>