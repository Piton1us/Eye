<?php 

   require('../db.php');

   $id = $_GET['id'];

   $ImgDelete = $_GET['img'];

   $sql = "DELETE FROM `film` WHERE id = '$id'";

   $result = mysqli_query($connect,$sql);

   mysqli_close($connect);

   unlink("../img/$imgDelete");

   header("Location: ../admin/index.php")




?>