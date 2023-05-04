<?php

require('function.php');

require('../db.php');

if(isset($_POST['btn-add'])){

   print_r($_FILES);

   can_upload($file);

   $img = make_upload($_FILES['file']);

   //$video = $_FILES['file'];
   

   $title = $_POST['title'];
   $description = $_POST['description'];
   $link = $_POST['link'];

   $sql = "INSERT INTO `film` (`title`,`description`,`img`,`link`) VALUES ('$title','$description','$img','$link')";

   $result = mysqli_query($connect,$sql);
   mysqli_close($connect);

  
   make_download();
}

   header("Location: ../admin/index.php")







?>